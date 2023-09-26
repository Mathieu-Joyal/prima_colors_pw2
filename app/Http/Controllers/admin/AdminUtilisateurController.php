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
     * Suppression de l'utilisateur
     *
     * @return View
     */
    public function destroy($id){

        // Section pour regarder si l'utilisateur à une réservation à son actif
        $user = User::find($id);
        $reservations = $user->reservations;

        if ($reservations->count() > 0) {
            return redirect()->route('admin.utilisateurs.index')
                ->with('error', "Vous ne pouvez supprimer un utilisateur qui à une ou plusieurs réservations à son nom.");
        }


        // Supprimer l'utilisateur
        User::destroy($id);

        // Redirection
        return redirect()->route('admin.utilisateurs.index')
            ->with('succes', "L'utilisateur a été supprimé");

    }
}
