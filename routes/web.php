<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\EnregistrementController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;

// Les routes d'administration
use App\Http\Controllers\admin\AdminAccueilController;
use App\Http\Controllers\admin\AdminEmployeController;
use App\Http\Controllers\admin\AdminUtilisateurController;
use App\Http\Controllers\admin\AdminActualiteController;
use App\Http\Controllers\admin\AdminActiviteController;
use App\Http\Controllers\admin\AdminConnexionController;
use App\Http\Controllers\admin\AdminEnregistrementController;

//SITE WEB

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
/**CONNEXION UTILISATEUR */
/**COMPTE UTILISATEUR */


// ***************************************************** //
// ************* SECTION ADMINISTRATION **************** //
// ***************************************************** //

    // SECTION CONNEXION D'UN COMPTE

// Affichage de la connexion d'un compte
Route::get("/connexion", [ConnexionController::class, 'create'])
    ->name('connexion.create')
    ->middleware('guest');

// Traitement du formulaire de connexion d'un compte utilisateur
Route::post("/connexion", [ConnexionController::class, 'authentifier'])
    ->name('connexion.authentifier')
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
// Affichage de la page accueil employé ***
Route::get('/admin', [AdminAccueilController::class, 'index'])
    ->name('admin.index')
    ->middleware('auth:employe');

// Affichage du formulaire création de compte employé
Route::get('/employes/create', [AdminEmployeController::class, 'create'])
    ->name('employes.create')
    ->middleware('auth:employe');

// Traitement de la suppression par l'admininstrateur du forfait choisit par l'utilisateur
Route::get("/utilisateurs/{id}/admin", [ReservationController::class, 'destroyByAdmin'])
    ->name('reservations.destroyByAdmin')
    ->middleware('auth:employe');


    //SECTION GESTIONS ACTUALITÉS

    //Affichage de la liste d'actualités
Route::get('/admin/actualites', [AdminActualiteController::class, 'index'])
    ->name('admin.actualites.index');
    // ->middleware('auth:employe');

    //Affichage du formulaire d'ajout d'une actualités
Route::get('/admin/actualites/create', [AdminActualiteController::class, 'create'])
    ->name('admin.actualites.create');
    // ->middleware('auth:employe');

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


// SECTION CONNEXION ADMINISTRATEUR

// Affichage de la page de connexion des employés
Route::get("/admin/connexion", [AdminConnexionController::class, 'index'])
    ->name('admin.connexion.index')
    ->middleware('guest');

// Traitement du formulaire de connexion d'un compte employé
Route::post("/admin/connexion", [AdminConnexionController::class, 'authentifier'])
    ->name('admin.connexion.authentifier')
    ->middleware('guest');

// Déconnexion du compte employé
Route::post("/admin/deconnexion", [AdminConnexionController::class, 'deconnecter'])
    ->name('admin.deconnexion')
    ->middleware('auth:employe');


// ADMIN SECTION GESTIONS DES EMPLOYÉS
// Affichage de la page employé
Route::get('/admin/employe', [AdminEmployeController::class, 'index'])
    ->name('admin.employes.index')
    ->middleware('auth:employe');

// Affichage du formulaire de modification d'un employé
Route::get("/admin/employe/edit/{id}", [AdminEmployeController::class, 'edit'])
    ->name('admin.employes.edit')
    ->middleware('auth:employe');

// Traitement de la suppression de l'employé
Route::get("/admin/employe/destroy/{id}", [AdminEmployeController::class, 'destroy'])
    ->name('admin.employes.destroy')
    ->middleware('auth:employe');


// ADMIN SECTION GESTIONS DES UTILISATEURS
// Affichage de la page utilisateurs
Route::get('/admin/utilisateur', [AdminUtilisateurController::class, 'index'])
    ->name('admin.utilisateurs.index')
    ->middleware('auth:employe');

// Affichage du formulaire de modification d'un employé
Route::get("/admin/utilisateur/edit/{id}", [AdminUtilisateurController::class, 'edit'])
    ->name('admin.utilisateurs.edit')
    ->middleware('auth:employe');

// Traitement de la suppression de l'employé
Route::get("/admin/utilisateurs/destroy/{id}", [AdminUtilisateurController::class, 'destroy'])
    ->name('admin.utilisateurs.destroy')
    ->middleware('auth:employe');
