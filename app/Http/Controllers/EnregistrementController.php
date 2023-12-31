<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EnregistrementController extends Controller
{
    /**
     * Affiche le formulaire d'enregistrement d'un utilisateur
     *
     * @return View
     */
    public function create() {

        return view('auth.enregistrement.create');
    }

    /**
     * Traite l'enregistrement du compte utilisateur
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request) {

        // Validation
        $valides = $request->validate([
            "prenom" => "required|max:255",
            "nom" => "required|max:255",
            "email" => "required|email|unique:users,email",
            "ville" => "nullable",
            "age" =>"required|integer|min:18|max:99",
            "password" => "required|min:8|regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/",
            "confirmation_password" => "required|same:password"
        ],[
            "prenom.required" => "Le prénom est requis",
            "prenom.max" => "Vous devez avoir un maximum de :max caractères",
            "nom.required" => "Le nom est requis",
            "nom.max" => "Vous devez avoir un maximum de :max caractères",
            "email.required" => "Le courriel est requis",
            "email.email" => "Le courriel doit avoir un format valide",
            "email.unique" => "Ce courriel ne peut pas être utilisé",
            "age.required" => "L'âge est requise",
            "age.min" => "Vous devez avoir un minimum de :min ans",
            "age.max" => "Vous devez avoir un maximum de :max ans",
            "password.required" => "Le mot de passe est requis",
            "password.min" => "Le mot de passe doit avoir une longueur de :min caractères",
            "password.regex" => "Le mot de passe doit contenir au moins une lettre majuscule, un chiffre et un caractère spécial (@, $, !, *, %, ?, &)",
            "confirmation_password.required" => "La confirmation du mot de passe est requise",
            "confirmation_password.same" => "Le mot de passe n'a pu être confirmé"
        ]);

        // Préparation à l'inclusion des informations dans la BDD
        $user = new User();

        $user->prenom = $valides["prenom"];
        $user->nom = $valides["nom"];
        $user->email = $valides["email"];
        $user->ville = $valides["ville"];
        $user->age = $valides["age"];
        $user->password = Hash::make($valides["password"]);

        // Sauvegarder toutes les informations dans la BDD
        $user->save();

        // Connecter l'utilisateur tout de suite
        // Je crois que la majorité de ce que je vois sur le web, demande une connexion par la suite, et ne redirige pas à la création
        // Nous pouvons changer si nous décidons de connecter automatiquement après la création.
        // Auth::login($user);

        // Redirection
        return redirect()
                ->route('connexion.index')
                ->with('succes', 'Votre compte a été créé');
    }
}
