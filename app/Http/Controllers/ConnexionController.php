<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{

    // public function __construct()
    // {
    //     // Apply 'auth:employe' middleware to 'authentifierEmploye' method
    //     $this->middleware('auth:employe', ['only' => 'authentifierEmploye']);
    // }

    /**
     * Affiche le formulaire de connexion
     *
     * @return View
     */
    public function create() {
        return view('auth.connexion.create');
    }

    /**
     * Traite la connexion d'un utilisateur
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function authentifierUser(Request $request) {

        // Validation
        $valides = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ], [
            "email.required" => "Le courriel est obligatoire",
            "email.email" => "Le courriel doit avoir un format valide",
            "password.required" => "Le mot de passe est requis"
        ]);

        // Ajouter l'utilisateur à la session
        if(Auth::attempt($valides)){
            $request->session()->regenerate();

            // Redirection s'il y a succes de la connexion
            return redirect()
                    ->intended(route('utilisateurs.index'))
                    ->with('succes', 'Vous êtes connectés!');
        }

        // Redirection si la connection échoue
        return back()
                ->withErrors([
                    "email" => "Les informations fournies ne sont pas valides"
                ])
                ->onlyInput('email');

    }

    /**
     * Traite la connexion d'un employé
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function authentifierEmploye(Request $request) {

        // Validation
        $valides = $request->validate([
            "identifiant" => "required",
            "password" => "required"
        ], [
            "identifiant.required" => "L'identifiant est requis.",
            "password.required" => "Le mot de passe est requis."
        ]);

        // Ajouter l'employé à la session
        if(Auth::guard('employe')->attempt($valides)){
            $request->session()->regenerate();

            return redirect()
                    ->intended(route('employes.index'))
                    ->with('succes', 'Vous êtes connectés!');
        }

        // Redirection
        return back()
                ->withErrors([
                    "email" => "Les informations fournies ne sont pas valides"
                ])
                ->onlyInput('email');

    }

    /**
     * Traite la déconnexion de l'utilisateur
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function deconnecter(Request $request) {
        Auth::logout();

        // Enlever l'utilisateur de la session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirection
        return redirect()
                ->route('connexion.create')
                ->with('succes', "Vous êtes déconnectés!");
    }
}
