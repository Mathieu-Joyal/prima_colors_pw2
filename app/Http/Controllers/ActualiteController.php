<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    /**
     * Affiche la liste des actualites
     *
     * @return View
     */

    public function index()
    {
        $actualitesRecentes = Actualite::whereYear('date_publication', 2023)
            ->orderBy('date_publication', 'desc')
            ->take(5)
            ->get();

        $actualitesAnciennes = Actualite::whereYear('date_publication', 2022)
            ->orderBy('date_publication', 'desc')
            ->take(5)
            ->get();

        return view("actualites.index", [
            "actualitesRecentes" => $actualitesRecentes,
            "actualitesAnciennes" => $actualitesAnciennes,
        ]);
    }
}
