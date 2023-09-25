<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
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

        return view('admin.index', [
            "un_employe" => $un_employe
        ]);
    }
}

