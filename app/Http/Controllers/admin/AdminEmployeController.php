<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\Employe;
use App\Models\Forfait;
use App\Models\Reservation;
use App\Models\Role;
use App\Models\User;

class AdminEmployeController extends Controller
{
    /**
     * À MARIE-ÈVE
     * Affichage de la liste des employés
     *
     * @return void
     */
    public function index() {

        return view ('admin.employes.index');
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
