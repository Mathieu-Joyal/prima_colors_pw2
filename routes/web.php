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




    // SECTION CONNEXION D'UN COMPTE
// Affichage de la connexion d'un compte
Route::get("/connexion", [ConnexionController::class, 'create'])
    ->name('connexion.create')
    ->middleware('guest');

// Traitement du formulaire de connexion d'un compte utilisateur
Route::post("/connexion", [ConnexionController::class, 'authentifierUser'])
    ->name('connexion.authentifierUser')
    ->middleware('guest');

// Traitement du formulaire de connexion d'un compte employé
Route::post("/connexion/employe", [ConnexionController::class, 'authentifierEmploye'])
    ->name('connexion.authentifierEmploye')
    ->middleware('guest');


    // SECTION CRÉATION D'UN COMPTE
// Affichage de l'enregistrement d'un nouveau compte utilisateur
Route::get("/enregistrement",[EnregistrementController::class, 'create'])
    ->name('enregistrement.create')
    ->middleware('guest');

// Traitement du formulaire d'enregistrement d'un nouveau compte utilisateur
Route::post("/enregistrement", [EnregistrementController::class, 'store'])
    ->name('enregistrement.store')
    ->middleware('guest');

// Traitement du formulaire d'enregistrement d'un nouveau compte employe
Route::post("/enregistrement/employe", [EnregistrementController::class, 'storeEmploye'])
    ->name('enregistrement.storeEmploye')
    ->middleware('auth:employe');


    // SECTION DÉCONNEXION D'UN COMPTE
// Déconnexion du compte utilisateur
Route::post("/deconnexion", [ConnexionController::class, 'deconnecterUser'])
    ->name('deconnexion.user')
    ->middleware('auth');

// Déconnexion du compte employé
Route::post("/deconnexion/employe", [ConnexionController::class, 'deconnecterEmploye'])
    ->name('deconnexion.employe')
    ->middleware('auth:employe');


    // SECTION COMPTE UTILISATEUR
// Affichage de la page utilisateur
Route::get('/utilisateurs', [UtilisateurController::class, 'index'])
    ->name('utilisateurs.index')
    ->middleware('auth');

// Traitement du formulaire d'ajout d'une réservation
Route::post('/utilisateurs', [ReservationController::class, 'store'])
    ->name('reservations.store')
    ->middleware('auth');

// Traitement de la suppression du forfait choisit par l'utilisateur
Route::get("/utilisateurs/{id}/user", [ReservationController::class, 'destroyByUser'])
    ->name('reservations.destroyByUser')
    ->middleware('auth');

// Traitement du formulaire d'ajout du concours
Route::post('/utilisateurs/concours', [UtilisateurController::class, 'updateConcours'])
    ->name('utilisateurs.updateConcours')
    ->middleware('auth');

    // SECTION COMPTE EMPLOYÉ
// Affichage de la page employé
Route::get('/employes', [EmployeController::class, 'index'])
    ->name('employes.index')
    ->middleware('employe');

// Traitement de la suppression par l'admininstrateur du forfait choisit par l'utilisateur
Route::get("/utilisateurs/{id}/admin", [ReservationController::class, 'destroyByAdmin'])
    ->name('reservations.destroyByAdmin')
    ->middleware('auth:employe');


    //SECTION GESTIONS ACTUALITÉS

    // Affichage du formulaire d'ajout d'une actualités
// Route::get('/actualites/create', [ActualiteController::class, 'create'])
//     ->name('actualites.create')
//     ->middleware('auth');

// // Traitement du formulaire
// Route::post('/actualites', [ActualiteController::class, 'store'])
//     ->name('actualites.store')
//     ->middleware('auth');

// // Affichage du formulaire de modification d'une actualite
// Route::get("/actualites/edit/{id}", [ActualiteController::class, 'edit'])
//     ->name('actualites.edit')
//     ->middleware('auth');

// // Traitement du formulaire de modification
// Route::post("/actualites/update", [ActualiteController::class, 'update'])
//     ->name('actualites.update')
//     ->middleware('auth');

//     //Suppression d'une actualité
// Route::post("/actualites/destroy", [ActualiteController::class, 'destroy'])
//     ->name('actualites.destroy')
//     ->middleware('auth');

    //SECTION GESTIONS ACTIVITÉS

     // Affichage du formulaire d'ajout d'une activités
// Route::get('/activites/create', [ActiviteController::class, 'create'])
// ->name('activites.create')
// ->middleware('auth');

// // Traitement du formulaire
// Route::post('/activites', [ActiviteController::class, 'store'])
// ->name('activites.store')
// ->middleware('auth');

// // Affichage du formulaire de modification d'une Activite
// Route::get("/activites/edit/{id}", [ActiviteController::class, 'edit'])
// ->name('activites.edit')
// ->middleware('auth');

// // Traitement du formulaire de modification
// Route::post("/activites/update", [ActiviteController::class, 'update'])
// ->name('activites.update')
// ->middleware('auth');
// //Suppression d'une activité
// Route::post("/activites/destroy", [ActiviteController::class, 'destroy'])
// ->name('activites.destroy')
// ->middleware('auth');
