<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Forfait;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class AdminReservationController extends Controller {

    /**
     * Affichage de la page des réservations
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request){

        // Allez chercher la requête de la recherche
        $requete = $request->input('user_recherche');

        // Initialise la recherche
        $requete_user = Reservation::query();

        // Si une recherche est fournie, filtrer le résultat
        $requete_user = Reservation::whereHas('user', function (Builder $la_requete) use ($requete) {

            $la_requete->where('prenom', 'like', '%' . $requete . '%')
                        ->orWhere('nom', 'like', '%' . $requete . '%')
                        ->orWhere('email', 'like', '%' . $requete . '%');
        });

        // Récupérer les réservations en fonction de la requête
        $users = $requete_user->get();

        // Redirection
        return view('admin.reservations.index', [
            "forfaits" => Forfait::all(),
            "reservations" => $users
        ]);
    }

    /**
     * Suppression d'une réservation par un administrateur
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id) {

        // Redirection si ce n'est pas un administrateur qui se connecte
        if(auth()->guard('employe')->user()->role_id !== 1) {

            return redirect()
                    ->route('admin.employes.index')
                    ->with('erreur', 'Seul un administrateur peut supprimer une réservation');
        }

        // Supprimer la réservation
        Reservation::destroy($id);

        // Redirection
        return back()
            ->with('succes', "La réservation de l'utilisateur a été annulée");
    }
}
