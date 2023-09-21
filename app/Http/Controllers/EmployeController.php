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
     * À MARIE-ÈVE
     * Affichage de la liste des employés
     *
     * @return void
     */
    public function index() {

        return view ('employes.index');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
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

    /**
     * Undocumented function
     *
     * @return void
     */
    public function edit($id){

    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function destroy($id){

    }
}
