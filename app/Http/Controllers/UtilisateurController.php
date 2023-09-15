<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UtilisateurController extends Controller
{
    /**
     * Affiche la liste des messages
     *
     * @return View
     */
    public function index() {

        $user = auth()->user();

        return view('utilisateurs.index', [
            "user" => $user,
            "forfaits" => Forfait::all(),
            "reservations" => Reservation::where('user_id', $user->id)->get(),
        ]);
    }

    /**
     * Traite l'enregistrement du compte utilisateur
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateConcours(Request $request) {

        // Validation
        $valides = $request->validate([
            "titre_oeuvre" => "required|max:255",
            "image_oeuvre" => "nullable|mimes:png,jpg,jpeg",

        ],[
            "titre_oeuvre.required" => "Le titre de l'oeuvre est requis",
            "titre_oeuvre.max" => "Vous devez avoir un maximum de :max caractères",
            "image_oeuvre.mimes" => "L'image doit avoir une des extensions suivantes: PNG, JPG, JPEG",
        ]);

        // Récupération de l'utilisateur à modifier, préparation à l'inclusion des informations dans la BDD
        $user = User::findOrFail(Auth::id());
        $user->titre_oeuvre = $valides["titre_oeuvre"];

        // Traiter le téléversement
        if($request->hasFile('image_oeuvre')){
            // Déplacer
            Storage::putFile("public/uploads", $request->image_oeuvre);
            // Sauvegarder le "bon" chemin qui sera inséré dans la BDD et utilisé par le navigateur
            $user->image_oeuvre = "/storage/uploads/" . $request->image_oeuvre->hashName();
        }

        // Sauvegarder toutes les informations dans la BDD
        $user->save();

        // Redirection
        return redirect()
                ->route('utilisateurs.index')
                ->with('succes', 'Merci de participer au concours!');
    }
}
