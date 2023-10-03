<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminAccueilController extends Controller
{
    /**
     * Affiche la page d'accueil des employés
     *
     * @return View
     */
    public function index() {

    $un_employe = auth()->guard('employe')->user();

        // Retourne la vue
        return view('admin.index', [

            "un_employe" => $un_employe
        ]);
    }
}

