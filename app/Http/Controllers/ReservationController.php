<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Traite l'enregistrement de la réservation de l'utilisateur
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request) {

        // Validation
        $valides = $request->validate([
            "forfait" => "required",

        ],[
            "forfait.required" => "",
        ]);

        // Préparation à l'inclusion des informations dans la BDD
        $reservation = new Reservation();

        $reservation->forfait_id = $valides["forfait"];
        $reservation->user_id = Auth::id();

        // Sauvegarder toutes les informations dans la BDD
        $reservation->save();

        // Redirection
        return redirect()
                ->route('utilisateurs.index')
                ->with('succes', 'La réservation de votre forfait est confirmé');
    }

    /**
     * Suppression d'une réservation par l'utilisateur
     *
     * @param int $id Id de la réservation à supprimer
     * @return RedirectResponse
     */
    public function destroy($id) {
        // Supprimer la réservation
        Reservation::destroy($id);

        // Redirection
        return redirect()->route('utilisateurs.index')
            ->with('succes', "La réservation a été annulée!");
    }
}
