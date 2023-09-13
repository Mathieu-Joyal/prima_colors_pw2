<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
     /**
     * Affiche la liste des activités
     *
     * @return View
     */
    public function index()
    {
      $activites = Activite::all();

      return view ("activites.index", [
        "activites" => $activites,
      ]);
    }
}
