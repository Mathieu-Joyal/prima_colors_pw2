<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use App\Models\Reservation;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Affiche la liste des messages
     *
     * @return View
     */
    public function index() {

        $employe = auth()->user();

        return view('employes.index', [
            "employe" => $employe,
            "roles" => Role::all(),
            "users" => User::all(),
            "reservations" => Reservation::all(),
            "forfaits" => Forfait::all(),
        ]);
    }

    // public function index() {
    //     $employe = auth('employe')->user();

    //     if ($employe) {
    //         // Employe is authenticated, you can safely access their properties
    //         $employeId = $employe->id;

    //         return view('employes.index', [
    //             "employe" => $employe,
    //             "roles" => Role::all(),
    //             // "reservations" => Reservation::where('user_id', $employeId)->get(),
    //         ]);
    //     }

        // Handle the case where no employe is authenticated
        // dd("Don't work");
        // return redirect()->route('connexion.create')->with('error', 'Vous devez vous connecter en tant qu\'employé.');
    // }
}
