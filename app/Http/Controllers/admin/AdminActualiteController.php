<?php

namespace App\Http\Controllers\admin;

use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;

class AdminActualiteController extends Controller
{

//==================TOUTES LES ACTIVITÉS===========================//
    /**
     * Affiche la liste des actualites
     *
     * @return View
     */

    public function index()
    {

        $actualitesRecentes = Actualite::whereYear('date_publication', 2023)
        ->orderBy('date_publication', 'asc')
        ->take(5)
        ->get();


    $actualitesAnciennes = Actualite::whereYear('date_publication', 2022)
        ->orderBy('date_publication', 'desc')
        ->take(5)
        ->get();

    return view("admin.actualites.index", [
        "actualitesRecentes" => $actualitesRecentes,
        "actualitesAnciennes" => $actualitesAnciennes,
    ]);

    }


//===============AJOUTER UNE ACTUALITÉ=================================//
/**
     * Affiche le formulaire d'ajout
     *
     * @return View
     */
    public function create() {

        return view('admin.actualites.create',

        );
    }

    /**
     * Traite l'ajout
     *
     * @param Request $request
     * @return RedirectResponse
    */
    public function store(Request $request) {
        // Valider
        $valides = $request->validate([
            "titre" => "required|min:4|max:150",
            "description" => "required|min:50|max:350",
            "image" => "required|mimes:png,jpg,jpeg",

        ], [
            "titre.max" => "Le titre doit avoir un maximum de :max caractères",
            "titre.min" => "Le titre doit avoir un minimum de :min caractères",
            "description.max" => "La description doit avoir un maximum de :max caractères",
            "description.min" => "La description doit avoir un minimum de :min caractères",
            "image.required" => "Une image doit être téléchargé ",

        ]);

        // Ajouter à la BDD
        $actualite = new Actualite;
        $actualite->titre = $valides["titre"];
        $actualite->description = $valides["description"];
        $actualite->employe_id = auth()->guard('employe')->user()->id;
        $actualite->date_publication = now()->format("Y-m-d");

        // Traiter le téléversement
        if($request->hasFile('image')){
            // Déplacer
            Storage::putFile("public/uploads", $request->image);
            // Sauvegarder le "bon" chemin qui sera inséré dans la BDD et utilisé par le navigateur
            $actualite->image = "/storage/uploads/" . $request->image->hashName();
        }
        $actualite->save();

        // Rediriger
        return redirect()
                ->route('admin.actualites.index')
                ->with('succes', "L'actualité a été ajoutée avec succès!");
    }
//==========================MODIFIER UNE ACTUALITÉ===========================//
    /**
     * Affiche le formulaire de modification
     *
     * @param int $id Id de l'actualité à modifier
     * @return View
     */
    public function edit($id) {
        return view('admin.actualites.edit', [
            "actualite" => actualite::findOrFail($id),
            // "employe_id" => Employe::orderBy('nom', 'asc')
            //                     ->get()
        ]);
    }

    /**
     * Traite la modification
     *
     * @param Request $request Objet qui contient tous les champs reçus dans la requête
     * @return RedirectResponse
     */
    public function update(Request $request) {
        // Valider
        $valides = $request->validate([
            "id" => "required",
            "titre" => "required|min:4|max:150",
            "image" => "required|",
            "descritpion" => "required"
        ], [

            "titre.max" => "Le titre doit avoir un maximum de :max caractères",
            "titre.min" => "Le titre doit avoir un minimum de :min caractères",
            "description.max" => "Le titre doit avoir un maximum de :max caractères",
            "description.min" => "Le titre doit avoir un minimum de :min caractères",
            "image" => "Une image doit être téléchargé ",



        ]);

        // Récupération de la actualite à modifier, suivi de la modification et sauvegarde
        $actualite = Actualite::findOrFail($valides["id"]);
        $actualite->titre = $valides["titre"];
        $actualite->description = $valides["descritpion"];
        $actualite->employe_id = auth()->id();
        $actualite->image =

        $actualite->save();

        // Rediriger
        return redirect()
                ->route('admin.actualites.index')
                ->with('succes', "L'actualité a été modifiée avec succès!");
    }

//=============================SUPPRIMER UNE ACTUALITÉ=============================//
    // /**
    //  * Traite la suppression
    //  *
    //  * @param Request $request
    //  * @return RedirectResponse
    //  */
    public function destroy(Request $request) {
        Actualite::destroy($request->id);

        return redirect()->route('admin.actualites.index')
                ->with('succes', "La actualite a été supprimée!");
    }

}
