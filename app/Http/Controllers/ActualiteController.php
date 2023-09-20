<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    /**
     * Affiche la liste des actualites
     *
     * @return View
     */

    public function index()
    {
        $actualitesRecentes = Actualite::whereYear('date_publication', 2023)
            ->orderBy('date_publication', 'desc')
            ->take(5)
            ->get();

        $actualitesAnciennes = Actualite::whereYear('date_publication', 2022)
            ->orderBy('date_publication', 'desc')
            ->take(5)
            ->get();

        return view("actualites.index", [
            "actualitesRecentes" => $actualitesRecentes,
            "actualitesAnciennes" => $actualitesAnciennes,
        ]);
    }

/**
     * Affiche le formulaire d'ajout
     *
     * @return View
     */
    public function create() {
        return view('actualites.create', [
        ]);
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
            "image" => "required|",

        ], [
            "titre.max" => "Le titre doit avoir un maximum de :max caractères",
            "titre.min" => "Le titre doit avoir un minimum de :min caractères",
            "description.max" => "Le titre doit avoir un maximum de :max caractères",
            "description.min" => "Le titre doit avoir un minimum de :min caractères",
            "image.required" => "Une image doit être téléchargé ",

        ]);

        // Ajouter à la BDD
        $actualite = new Actualite; // $actualite contient un objet "vide" du modèle (équivalent à une nouvelle entrée dans la table)
        $actualite->titre = $valides["titre"] ?? now();
        $actualite->descritpion = ""; // Le texte est initialisé à du texte vide pour commencer (pourrait être null)
        // $actualite->employe_id = auth()->user()->id;
        // $actualite->date_publication = $valides["categorie_id"];
        $actualite->save();

        // Rediriger
        return redirect()
                ->route('actualites.index')
                ->with('succes', "L'actualité a été ajoutée avec succès!");
    }

    // /**
    //  * Affiche le formulaire de modification
    //  *
    //  * @param int $id Id de la note à modifier
    //  * @return View
    //  */
    // public function edit($id) {
    //     return view('actualites.edit', [
    //         "actualite" => actualite::findOrFail($id),
    //         // "employe_id" => Employe::orderBy('nom', 'asc')
    //         //                     ->get()
    //     ]);
    // }

    // /**
    //  * Traite la modification
    //  *
    //  * @param Request $request Objet qui contient tous les champs reçus dans la requête
    //  * @return RedirectResponse
    //  */
    // public function update(Request $request) {
    //     // Valider
    //     $valides = $request->validate([
    //         "id" => "required",
    //         "titre" => "required|min:4|max:150",
    //         // "image" => "required|",
    //         // "date_publication" => "required|",

    //         "descritpion" => "required"
    //     ], [

    //         "titre.max" => "Le titre doit avoir un maximum de :max caractères",
    //         "titre.min" => "Le titre doit avoir un minimum de :min caractères",
    //         "description.max" => "Le titre doit avoir un maximum de :max caractères",
    //         "description.min" => "Le titre doit avoir un minimum de :min caractères",
    //         "image" => "Une image doit être téléchargé ",
    //         "date_publication" => "",


    //     ]);

    //     // Récupération de la actualite à modifier, suivi de la modification et sauvegarde
    //     $actualite = Actualite::findOrFail($valides["id"]);
    //     $actualite->titre = $valides["titre"];
    //     $actualite->description = $valides["descritpion"];
    //     $actualite->employe_id = auth()->id();
    //     $actualite->image =

    //     $actualite->save();

    //     // Rediriger
    //     return redirect()
    //             ->route('actualites.index')
    //             ->with('succes', "La actualite a été modifiée avec succès!");
    // }

    // /**
    //  * Traite la suppression
    //  *
    //  * @param Request $request
    //  * @return RedirectResponse
    //  */
    // public function destroy(Request $request) {
    //     Actualite::destroy($request->id);

    //     return redirect()->route('actualites.index')
    //             ->with('succes', "La actualite a été supprimée!");
    // }

}
