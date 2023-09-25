<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Forfait;
use App\Models\Reservation;
use App\Models\User;

class AdminUtilisateurController extends Controller
{
    /**
     * Affiche la liste des utilisateurs
     *
     * @return View
     */
    public function index() {

        return view('admin.utilisateurs.index', [
            "users" => User::all(),
            "forfaits" => Forfait::all(),
            "reservations" => Reservation::all(),
        ]);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function edit($id){

        return view('admin.utilisateurs.edit');

    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function destroy($id){

    }
}
