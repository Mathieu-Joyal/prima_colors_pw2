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
      $vendrediActivites = Activite::whereDay('date', 13) ->get();
      $samediActivites = Activite::whereDay('date', 14) ->get();
      $dimancheActivites = Activite::whereDay('date', 15) ->get();

      return view ("activites.index", [
        "vendrediActivites" => $vendrediActivites,
        "samediActivites" => $samediActivites,
        "dimancheActivites" => $dimancheActivites,
      ]);
    }
}
