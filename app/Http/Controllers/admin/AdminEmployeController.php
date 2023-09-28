<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Middleware\Employe;
use App\Models\Employe;

class AdminEmployeController extends Controller
{
    /**
     * Affichage de la liste des employés
     *
     * @return View
     */
    public function index() {

        $employes = \App\Models\Employe::all();

        return view('admin.employes.index', [
            "employes" => $employes,
            // "forfaits" => Forfait::all(),
            // "reservations" => Reservation::all(),
        ]);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function edit($id){

        return view('admin.employes.edit');

    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function destroy($id){

    }
}
