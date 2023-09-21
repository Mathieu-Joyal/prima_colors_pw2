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
     * Affiche les liens de gestions
     *
     * @return View
     */
    public function index() {
return view ('admin.index');

    }
    public function create(){
        $un_employe = auth()->guard('employe')->user();

        $employes = \App\Models\Employe::all();

        return view('employes.create', [
            "un_employe" => $un_employe,
            "employes" => $employes,
            "roles" => Role::all(),
            "users" => User::all(),
            "reservations" => Reservation::all(),
            "forfaits" => Forfait::all(),
        ]);
    }
}
