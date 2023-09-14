<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

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

        // Séparé les deux valeurs inséré dans l'option de la réservation
        list($forfait_id, $user_id) = explode('-', request('forfait'));

        // Préparation à l'inclusion des informations dans la BDD
        $reservation = new Reservation();

        $reservation->forfait_id = $forfait_id;
        $reservation->user_id = $user_id;

        // Sauvegarder toutes les informations dans la BDD
        $reservation->save();

        // Redirection
        return redirect()
                ->route('utilisateurs.index')
                ->with('succes', 'La réservation de votre forfait est confirmé');
    }
}
