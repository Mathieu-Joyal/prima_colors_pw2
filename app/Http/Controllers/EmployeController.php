<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Affiche la liste des messages
     *
     * @return View
     */
    public function index() {

        $employe = auth()->user();

        return view('employes.index', [
            "employe" => $employe,
            // "forfaits" => Forfait::all(),
            // "reservations" => Reservation::where('user_id', $user->id)->get(),
        ]);
    }
}
