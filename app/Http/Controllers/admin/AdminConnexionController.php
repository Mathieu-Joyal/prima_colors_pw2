<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminConnexionController extends Controller
{
    /**
     * Affiche le formulaire de connexion des employés
     *
     * @return View
     */
    public function index() {

        return view('auth.admin.connexion.index');
    }

    /**
     * Traite la connexion d'un employé
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function authentifier(Request $request) {

        // Validation
        $valides = $request->validate([
            "identifiant" => "required",
            "password" => "required",
        ], [
            "identifiant.required" => "L'identifiant est requis.",
            "password.required" => "Le mot de passe est requis.",
        ]);

        // Ajouter l'employé à la session si la connexion est valide
        if(Auth::guard('employe')->attempt($valides)){

            $request->session()->regenerate();

            // Redirection
            return redirect()
                    ->intended(route('admin.index'))
                    ->with('succes', 'Vous êtes connectés!');
        }

        // Redirection si erreur dans la connexion
        return back()
            ->withErrors([
                "erreur_connexion" => "Les informations fournies ne sont pas valides"
            ])
            ->onlyInput('identifiant');
    }

    /**
     * Traite la déconnexion de l'employé
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
                ->route('admin.connexion.index')
                ->with('succes', "Vous êtes déconnectés!");
    }
}
