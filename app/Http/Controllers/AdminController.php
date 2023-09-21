<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Affiche la page d'accueil des employés
     *
     * @return View
     */
    public function index() {

        return view ('admin.index');
    }
}
