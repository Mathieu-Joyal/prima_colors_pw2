<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Middleware\Employe;
use Illuminate\Support\Facades\Hash;
use App\Models\Employe;
use App\Models\Forfait;
use App\Models\Reservation;
use App\Models\Role;
use App\Models\User;

class AdminEnregistrementController extends Controller
{

    /**
     * Undocumented function
     *
     * @return void
     */
    public function create(){
        $un_employe = auth()->guard('employe')->user();

        $employes = \App\Models\Employe::all();

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
            "identifiant" => "required|integer|min:1000000|max:9999999",
            "password" => "required|min:8",
            "confirmation_password" => "required|same:password",
            "roles" => "required"
        ],[
            "prenom.required" => "Le prénom est requis",
            "prenom.max" => "Vous devez avoir un maximum de :max caractères",
            "nom.required" => "Le nom est requis",
            "nom.max" => "Vous devez avoir un maximum de :max caractères",
            "identifiant.required" => "L'identifiant est requis",
            "identifiant.min" => "L'identifiant doit être plus grand que :min",
            "identifiant.max" => "L'identifiant doit être plus petit que :min",
            "password.required" => "Le mot de passe est requis",
            "password.min" => "Le mot de passe doit avoir une longueur de :min caractères",
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
                ->route('employes.index')
                ->with('succes', 'Votre compte employé a été créé');
    }
}