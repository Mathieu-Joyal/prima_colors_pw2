<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminReservationController extends Controller
{
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
