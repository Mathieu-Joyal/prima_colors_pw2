<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ForfaitController;
use App\Http\Controllers\ConcoursController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\EnregistrementController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;

// Les routes d'administration
use App\Http\Controllers\Admin\AdminAccueilController;
use App\Http\Controllers\Admin\AdminEmployeController;
use App\Http\Controllers\Admin\AdminUtilisateurController;
use App\Http\Controllers\Admin\AdminActualiteController;
use App\Http\Controllers\Admin\AdminActiviteController;
use App\Http\Controllers\Admin\AdminConnexionController;
use App\Http\Controllers\Admin\AdminEnregistrementController;
use App\Http\Controllers\Admin\AdminReservationController;

// ***************************************************** //
// **************** SECTION SITE WEB ******************* //
// ***************************************************** //

// ***************** PAGE ACCUEIL ********************** //
Route::get("/", [AccueilController::class, 'index'])
    ->name('accueil');

// **************** PAGE ACTIVITÉS ********************* //
Route::get('/activites', [ActiviteController::class, 'index'])
->name('activites.index');

// ***************** PAGE CONCOURS ********************** //
Route::get('/concours', [ConcoursController::class, 'index'])
->name('concours.index');

// ***************** PAGE À PROPOS ********************** //

Route::get('/apropos', [ConcoursController::class, 'index'])
->name('apropos.index');

// **************** PAGE ACTUALITÉS ******************** //
Route::get('/actualites', [ActualiteController::class, 'index'])
->name('actualites.index');

// **************** PAGE BILLETERIE ********************* //
Route::get('/forfaits', [ForfaitController::class, 'index'])
->name('forfaits.index');




// ***************************************************** //
// ************* SECTION ADMINISTRATION **************** //
// ***************************************************** //


// **** SECTION CONNEXION D'UN COMPTE UTILISATEUR ****** //
//
// Affichage de la page de connexion d'un compte utilisateur
Route::get("/connexion", [ConnexionController::class, 'create'])
    ->name('connexion.create')
    ->middleware('guest');

// Traitement du formulaire de connexion du compte utilisateur
Route::post("/connexion", [ConnexionController::class, 'authentifier'])
    ->name('connexion.authentifier')
    ->middleware('guest');

// Traitement de la déconnexion du compte utilisateur
Route::post("/deconnexion", [ConnexionController::class, 'deconnecter'])
    ->name('deconnexion.user')
    ->middleware('auth');


// ***** SECTION CRÉATION D'UN COMPTE UTILISATEUR ****** //
//
// Affichage du formulaire de créatiom d'un nouveau compte utilisateur
Route::get("/enregistrement",[EnregistrementController::class, 'create'])
    ->name('enregistrement.create')
    ->middleware('guest');

// Traitement du formulaire d'enregistrement d'un nouveau compte utilisateur
Route::post("/enregistrement", [EnregistrementController::class, 'store'])
    ->name('enregistrement.store')
    ->middleware('guest');


// ******* SECTION CONNEXION D'UN COMPTE EMPLOYÉ ******* //
//
// Affichage de la page de connexion d'un compte employé
Route::get("/admin/connexion", [AdminConnexionController::class, 'index'])
    ->name('admin.connexion.index')
    ->middleware('guest');

// Traitement du formulaire de connexion du compte employé
Route::post("/admin/connexion", [AdminConnexionController::class, 'authentifier'])
    ->name('admin.connexion.authentifier')
    ->middleware('guest');

// Traitement de la déconnexion du compte employé
Route::post("/admin/deconnexion", [AdminConnexionController::class, 'deconnecter'])
    ->name('admin.deconnexion')
    ->middleware('auth:employe');


// ******* SECTION CRÉATION D'UN COMPTE EMPLOYÉ ******** //
//
// Affichage du formulaire de créatiom d'un nouveau compte employé
Route::get('/admin/enregistrement', [AdminEnregistrementController::class, 'create'])
    ->name('admin.enregistrement.create')
    ->middleware('auth:employe');

// Traitement du formulaire d'enregistrement d'un nouveau compte employe
Route::post("/admin/enregistrement", [AdminEnregistrementController::class, 'store'])
    ->name('admin.enregistrement.store')
    ->middleware('auth:employe');


// *************** SECTION PAGE UTILISATEUR ***************** //
//
// Affichage de la page d'accueil utilisateur
Route::get('/utilisateurs', [UtilisateurController::class, 'index'])
    ->name('utilisateurs.index')
    ->middleware('auth');

// Traitement du formulaire d'ajout d'une réservation
Route::post('/utilisateurs', [ReservationController::class, 'store'])
    ->name('reservations.store')
    ->middleware('auth');

// Traitement de la suppression du forfait choisit par l'utilisateur
Route::post("/utilisateurs/{id}/user", [ReservationController::class, 'destroy'])
    ->name('reservations.destroy')
    ->middleware('auth');

// Traitement du formulaire d'ajout du concours
Route::post('/utilisateurs/concours', [UtilisateurController::class, 'updateConcours'])
    ->name('utilisateurs.updateConcours')
    ->middleware('auth');


// *************** SECTION ADMIN PAGE EMPLOYÉ ***************** //
//
// Affichage de la page d'accueil employé
Route::get('/admin', [AdminAccueilController::class, 'index'])
    ->name('admin.index')
    ->middleware('auth:employe');

// Affichage de la page liste des employés
Route::get('/admin/employe', [AdminEmployeController::class, 'index'])
    ->name('admin.employes.index')
    ->middleware('auth:employe');

// Affichage du formulaire d'ajout d'un employé
// Route::get('/admin/employe/create', [AdminEmployeController::class, 'create'])
//     ->name('admin.employes.create')
//     ->middleware('auth:employe');

// Affichage du formulaire de modification d'un employé
Route::get("/admin/employe/edit/{id}", [AdminEmployeController::class, 'edit'])
    ->name('admin.employes.edit')
    ->middleware('auth:employe');

// Traitement de la suppression de l'employé
Route::get("/admin/employe/destroy/{id}", [AdminEmployeController::class, 'destroy'])
    ->name('admin.employes.destroy')
    ->middleware('auth:employe');

// Traitement de la suppression par l'admininstrateur du forfait choisit par l'utilisateur
Route::post("/admin/utilisateur{id}/admin", [AdminReservationController::class, 'destroy'])
    ->name('admin.reservations.destroy')
    ->middleware('auth:employe');

// ************* SECTION ADMIN PAGE UTILISATEUR *************** //
//
// Affichage de la page utilisateurs
Route::get('/admin/utilisateur', [AdminUtilisateurController::class, 'index'])
    ->name('admin.utilisateurs.index')
    ->middleware('auth:employe');

// Affichage du formulaire de modification d'un utilisateur
Route::get("/admin/utilisateur/edit/{id}", [AdminUtilisateurController::class, 'edit'])
    ->name('admin.utilisateurs.edit')
    ->middleware('auth:employe');

// Traitement de la modification de l'utilisateur
Route::post("/admin/utilisateur/update/{id}", [AdminUtilisateurController::class, 'update'])
    ->name('admin.utilisateurs.update')
    ->middleware('auth:employe');

// Traitement de la suppression de l'utilisateur
Route::get("/admin/utilisateurs/destroy/{id}", [AdminUtilisateurController::class, 'destroy'])
    ->name('admin.utilisateurs.destroy')
    ->middleware('auth:employe');

// *************** SECTION ADMIN PAGE RÉSERVATIOM ***************** //
//
// Affichage de la page des réservations
Route::get('/admin/reservation', [AdminReservationController::class, 'index'])
    ->name('admin.reservations.index')
    ->middleware('auth:employe');






// *************** SECTION GESTIONS ACTUALITÉS***************** //
//
    //Affichage de la liste d'actualités
Route::get('/admin/actualites', [AdminActualiteController::class, 'index'])
    ->name('admin.actualites.index')
    ->middleware('auth:employe');

    //Affichage du formulaire d'ajout d'une actualités
Route::get('/admin/actualites/create', [AdminActualiteController::class, 'create'])
    ->name('admin.actualites.create')
    ->middleware('auth:employe');

// Traitement du formulaire
Route::post('admin/actualites/store', [AdminActualiteController::class, 'store'])
    ->name('admin.actualites.store');
    // ->middleware('auth:employe');

// Affichage du formulaire de modification d'une actualite
Route::get("/admin/actualites/edit/{id}", [AdminActualiteController::class, 'edit'])
    ->name('admin.actualites.edit');
    // ->middleware('auth');

// Traitement du formulaire de modification
Route::post("/admin/actualites/update", [AdminActualiteController::class, 'update'])
    ->name('admin.actualites.update');
    // ->middleware('auth');

//     //Suppression d'une actualité
Route::post("/admin/actualites/destroy", [AdminActualiteController::class, 'destroy'])
    ->name('admin.actualites.destroy');
//     ->middleware('auth');


// *************** SECTION GESTIONS ACTIVITÉS ***************** //
//

    //Affichage de la liste d'activités
    Route::get('/admin/activites', [AdminActiviteController::class, 'index'])
    ->name('admin.activites.index');
    // ->middleware('auth:employe');

     // Affichage du formulaire d'ajout d'une activités
Route::get('/admin/activites/create', [AdminActiviteController::class, 'create'])
->name('admin.activites.create');
// ->middleware('auth');

// // Traitement du formulaire
Route::post('/admin/activites', [AdminActiviteController::class, 'store'])
->name('admin.activites.store');
// ->middleware('auth');

// // Affichage du formulaire de modification d'une Activite
Route::get("/admin/activites/edit/{id}", [AdminActiviteController::class, 'edit'])
->name('admin.activites.edit');
// ->middleware('auth');

// // Traitement du formulaire de modification
Route::post("/admin/activites/update", [AdminActiviteController::class, 'update'])
->name('admin.activites.update');
// ->middleware('auth');

// //Suppression d'une activité
Route::post("/admin/activites/destroy", [AdminActiviteController::class, 'destroy'])
->name('admin.activites.destroy');
// ->middleware('auth');
