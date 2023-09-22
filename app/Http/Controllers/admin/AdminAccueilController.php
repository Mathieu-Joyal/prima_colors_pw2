<?php

namespace App\Http\Controllers\admin;

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

        return view ('admin.index');
    }
}
