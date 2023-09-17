<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\EnregistrementController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;

/*ACCUEIL*/
Route::get("/", [AccueilController::class, 'index'])
    ->name('accueil');

/**PAGE ACTIVITÉS */
Route::get('/activites', [ActiviteController::class, 'index'])
->name('activites.index');

/**PAGE ACTUALITÉS */
Route::get('/actualites', [ActualiteController::class, 'index'])
->name('actualites.index');

/** PAGE À PROPOS*/
/** PAGE BILLETERIE */
/**PAGE CONCOURS */


    // SECTION CONNEXION - CRÉATION COMPTE
// Affichage de la connexion d'un compte
Route::get("/connexion", [ConnexionController::class, 'create'])
    ->name('connexion.create');
    // ->middleware('guest');

// Traitement du formulaire de connexion d'un compte utilisateur
Route::post("/connexion", [ConnexionController::class, 'authentifierUser'])
    ->name('connexion.authentifierUser');

// Affichage de l'enregistrement d'un nouveau compte utilisateur
Route::get("/enregistrement",[EnregistrementController::class, 'create'])
    ->name('enregistrement.create');

// Traitement du formulaire d'enregistrement d'un nouveau compte utilisateur
Route::post("/enregistrement", [EnregistrementController::class, 'store'])
    ->name('enregistrement.store');

// Déconnexion du compte utilisateur
Route::post("/deconnexion", [ConnexionController::class, 'deconnecter'])
    ->name('deconnexion');


// Traitement du formulaire de connexion d'un compte employé
Route::post("/connexion/employe", [ConnexionController::class, 'authentifierEmploye'])
    ->name('connexion.authentifierEmploye');
    // ->middleware('auth:employe');

// Traitement du formulaire d'enregistrement d'un nouveau compte utilisateur
Route::post("/enregistrement/employe", [EnregistrementController::class, 'storeEmploye'])
    ->name('enregistrement.storeEmploye');

    // SECTION EMPLOYÉ

// Affichage de la page employé
Route::get('/employes', [EmployeController::class, 'index'])
    ->name('employes.index');
    // ->middleware('auth');


    // SECTION UTILISATEUR

// Affichage de la page utilisateur
Route::get('/utilisateurs', [UtilisateurController::class, 'index'])
    ->name('utilisateurs.index')
    ->middleware('auth');

// Traitement du formulaire d'ajout de la réservation
Route::post('/utilisateurs', [ReservationController::class, 'store'])
    ->name('reservations.store');

// Traitement de la suppression du forfait choisit par l'utilisateur
Route::get("/utilisateurs/{id}", [ReservationController::class, 'destroy'])
    ->name('reservations.destroy');

// Traitement du formulaire d'ajout du concours
Route::post('/utilisateurs/concours', [UtilisateurController::class, 'updateConcours'])
    ->name('utilisateurs.updateConcours');
