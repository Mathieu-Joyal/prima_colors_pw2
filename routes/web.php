<?php


use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ActiviteController;
use Illuminate\Support\Facades\Route;

/*ACCUEIL*/

/**PAGE ACTIVITÉS */
Route::get('/activites', [ActiviteController::class, 'index'])
->name('activites.index');

/**PAGE ACTUALITÉS */
Route::get('/actualites', [ActualiteController::class, 'index'])
->name('actualites.index');

/** PAGE À PROPOS*/
/** PAGE BILLETERIE */
/**PAGE CONCOURS */

