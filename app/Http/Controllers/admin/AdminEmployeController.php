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
    public function index(Request $request) {

        // Mettre la requête de la recherche
        $requete = $request->input('user_recherche');

        // Initialise la recherche
        $requete_user = Employe::query();

        // Si une recherche est fournie, filtrer le résultat
        if (!empty($requete)) {
            $requete_user->where(function ($la_requete) use ($requete) {
                $la_requete->where('prenom', 'like', '%' . $requete . '%')
                        ->orWhere('nom', 'like', '%' . $requete . '%')
                        ->orWhere('email', 'like', '%' . $requete . '%');
            });
        }

        // Récupérer les utilisateurs en fonction de la requête
        $users = $requete_user->get();

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
     * Affichage de la page de modification d'un employé
     *
     * @return View
     */
    // public function edit($id){

    //     // Retrouver les informations de l'employé
    //     $un_employe = Employe::find($id);

    //     // Pass the user data to the edit view
    //     return view('admin.employes.edit', [
    //         'un_employe' => $un_employe
    //     ]);
    // }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function destroy($id){

    }
}
