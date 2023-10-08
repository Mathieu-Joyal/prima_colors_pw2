<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Employe;
use App\Models\Forfait;
use App\Models\Reservation;
use App\Models\Role;
use App\Models\User;

class AdminEnregistrementController extends Controller
{

    /**
     * Affichage de la page de la création d'un employé
     *
     * @return View
     */
    public function create(){

        // Redirection si ce n'est pas un administrateur qui se connecte
        if(auth()->guard('employe')->user()->role_id !== 1) {

            return redirect()
                    ->route('admin.employes.index')
                    ->with('erreur', 'Seul un administrateur peut créer un employé');
        }

        // Récupère l'employé actuellement connecté
        $un_employe = auth()->guard('employe')->user();

        // Récupération de tous les employés
        $employes = \App\Models\Employe::all();

        // Retourne la vue
        return view('admin.employes.create', [
            "un_employe" => $un_employe,
            "employes" => $employes,
            "roles" => Role::all(),
            "users" => User::all(),
            "reservations" => Reservation::all(),
            "forfaits" => Forfait::all(),
        ]);
    }

    /**
     * Traite l'enregistrement du compte employé
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request) {

        // Validation
        $valides = $request->validate([
            "prenom" => "required|max:255",
            "nom" => "required|max:255",
            "identifiant" => "required|integer|min:1000000|max:9999999|unique:employes,identifiant",
            "password" => "required|min:8|regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%?&]+$/",
            "confirmation_password" => "required|same:password",
            "roles" => "required"
        ],[
            "prenom.required" => "Le prénom est requis",
            "prenom.max" => "Votre prénom doit avoir un maximum de :max caractères",
            "nom.required" => "Le nom est requis",
            "nom.max" => "Votre nom doit avoir un maximum de :max caractères",
            "identifiant.required" => "L'identifiant est requis",
            "identifiant.integer" => "L'identifiant doit être un nombre de sept chiffres ",
            "identifiant.min" => "L'identifiant doit être plus grand que :min",
            "identifiant.max" => "L'identifiant doit être plus petit que :max",
            "identifiant.unique" => "Cet identifiant ne peut pas être utilisé",
            "password.required" => "Le mot de passe est requis",
            "password.min" => "Le mot de passe doit avoir une longueur minimum de :min caractères",
            "password.regex" => "Le mot de passe doit contenir au moins une lettre majuscule, un chiffre et un caractère spécial (@, $, !, %, ?, &)",
            "confirmation_password.required" => "La confirmation du mot de passe est requise",
            "confirmation_password.same" => "Le mot de passe n'a pu être confirmé",
            "roles.required" => "Le role est requis",
        ]);

        // Préparation à l'inclusion des informations dans la BDD
        $employe = new Employe();

        $employe->prenom = $valides["prenom"];
        $employe->nom = $valides["nom"];
        $employe->identifiant = $valides["identifiant"];
        $employe->password = Hash::make($valides["password"]);
        $employe->role_id = $valides["roles"];

        // Sauvegarder toutes les informations dans la BDD
        $employe->save();

        // Redirection
        return redirect()
                ->route('admin.employes.index')
                ->with('succes', 'Votre compte employé a été créé');
    }
}
