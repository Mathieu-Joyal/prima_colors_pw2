<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Employe;
use App\Models\Forfait;
use App\Models\Reservation;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Affiche la liste des messages
     *
     * @return View
     */
    public function index() {

        $un_employe = auth()->guard('employe')->user();

        $employes = \App\Models\Employe::all();

        return view('employes.index', [
            "un_employe" => $un_employe,
            "employes" => $employes,
            "roles" => Role::all(),
            "users" => User::all(),
            "reservations" => Reservation::all(),
            "forfaits" => Forfait::all(),
        ]);
    }
}
