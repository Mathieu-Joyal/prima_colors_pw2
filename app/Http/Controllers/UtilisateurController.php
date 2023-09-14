<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use App\Models\Reservation;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Affiche la liste des messages
     *
     * @return View
     */
    public function index() {

        $user = auth()->user();

        return view('utilisateurs.index', [
            "user" => $user,
            "forfaits" => Forfait::all(),
            "reservations" => Reservation::where('user_id', $user->id)->get(),
        ]);
    }
}
