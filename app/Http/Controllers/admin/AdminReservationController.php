<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Forfait;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminReservationController extends Controller {

    /**
     * Affichage de la page des réservations
     *
     * @return View
     */
    public function index(){
        return view('admin.reservations.index', [
            "users" => User::all(),
            "forfaits" => Forfait::all(),
            "reservations" => Reservation::all(),
        ]);
    }


    /**
     * Suppression d'une réservation par un administrateur
     *
     * @param int $id Id de la réservation à supprimer
     * @return RedirectResponse
     */
    public function destroy($id) {

        // Supprimer la réservation
        Reservation::destroy($id);

        // Redirection
        return redirect()->route('admin.utilisateurs.index')
            ->with('succes', "La réservation de l'utilisateur a été annulée");
    }
}
