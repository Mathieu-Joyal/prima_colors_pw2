<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUtilisateurController extends Controller
{
    /**
     * Affiche la liste des utilisateurs
     *
     * @return View
     */
    public function index() {

        // Récupération de l'utilisateur connecté
        $user = auth()->user();

        return view('admin.utilisateurs.index');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function edit($id){

        return view('admin.utilisateurs.edit');

    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function destroy($id){

    }
}
