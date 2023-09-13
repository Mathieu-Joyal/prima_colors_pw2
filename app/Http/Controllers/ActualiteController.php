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
      $actualites = Actualite::all();

      return view ("actualites.index", [
        "actualites" => $actualites,
      ]);
    }
}
