<?php

namespace App\Http\Controllers\Admin;

use App\Models\Activite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
class AdminActiviteController extends Controller
{
    //==================TOUTES LES ACTIVITÉS===========================//
    /**
    * Affiche la liste des activités
    *
    * @return View
    */
    public function index()
    {
        $activites = Activite::all();

        return view ("admin.activites.index", [
            "activites" => $activites,
        ]);
    }

     /**
     * Filtre les activités
     *
     * @return View
     */
     public function filter(Request $request)
     {
         $selectedDate = $request->input('date');

         $activites = Activite::where('date', $selectedDate)->get();

         return view('admin.activites.index', compact('activites'));
     }

    //===============AJOUTER UNE ACTIVITÉ=================================//
    /**
    * Affiche le formulaire d'ajout
    *
    * @return View
    */
    public function create() {

        return view('admin.activites.create',

        );
    }

    /**
     * Traite de l'ajout d'une activité
    *
    * @param Request $request
    * @return RedirectResponse
    */
    public function store(Request $request) {

        // Redirection si ce n'est pas un administrateur qui se connecte
        if(auth()->guard('employe')->user()->role_id !== 1) {

            // Redirection
            return redirect()
                    ->route('admin.activites.index')
                    ->with('erreur', 'Seul un administrateur peut ajouter une activités');
        }

        // Validation
        $valides = $request->validate([
            "titre" => "required|min:4|max:150",
            "date" => "required",
            "heure" => "required",
            "description" => "required|min:50|max:350",
            "image" => "required|mimes:png,jpg,jpeg",
            "endroit" => "required",
        ], [
            "titre.max" => "Le titre doit avoir un maximum de :max caractères",
            "titre.min" => "Le titre doit avoir un minimum de :min caractères",
            "date" => "Une date doit être choisie",
            "heure" => "Une heure doit être choisie",
            "description.max" => "La description doit avoir un maximum de :max caractères",
            "description.min" => "La description doit avoir un minimum de :min caractères",
            "image.required" => "Une image doit être téléchargé ",

        ]);

        // Ajouter à la BDD
        $activite = new Activite;
        $activite->titre = $valides["titre"];
        $activite->date = $valides["date"];
        $activite->heure = $valides["heure"];
        $activite->description = $valides["description"];
        $activite->endroit = $valides["endroit"];
        $activite->employe_id = auth()->guard('employe')->user()->id;


        // Traiter le téléversement
        if($request->hasFile('image')){
            // Déplacer
            Storage::putFile("public/uploads", $request->image);
            // Sauvegarder le "bon" chemin qui sera inséré dans la BDD et utilisé par le navigateur
            $activite->image = "/storage/uploads/" . $request->image->hashName();
        }

        // Sauvegarder toutes les informations dans la BDD
        $activite->save();

        // Rediriger
        return redirect()
                ->route('admin.activites.index')
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

        return view('admin.activites.edit', [
            "activite" => Activite::findOrFail($id),
        ]);
    }

    /**
    * Traite de la modification d'une activité
    *
    * @param Request $request Objet qui contient tous les champs reçus dans la requête
    * @return RedirectResponse
    */
    public function update(Request $request) {

        // Redirection si ce n'est pas un administrateur
        if(auth()->guard('employe')->user()->role_id !== 1) {

            return redirect()
                    ->route('admin.activites.index')
                    ->with('erreur', 'Seul un administrateur peut modifier une activité');
        }

        // Validation
        $valides = $request->validate([

            "titre" => "required|min:4|max:150",
            "date" => "required",
            "heure" => "required",
            "description" => "required|min:50|max:350",
            "image" => "required|mimes:png,jpg,jpeg",
            "endroit" => "required",

        ], [
            "titre.max" => "Le titre doit avoir un maximum de :max caractères",
            "titre.min" => "Le titre doit avoir un minimum de :min caractères",
            "date" => "Une date doit être choisie",
            "heure" => "Une heure doit être choisie",
            "description.max" => "La description doit avoir un maximum de :max caractères",
            "description.min" => "La description doit avoir un minimum de :min caractères",
            "image.required" => "Une image doit être téléchargé ",

        ]);

        // Récupération de la activite à modifier, suivi de la modification et sauvegarde
        $activite = Activite::findOrFail($valides["id"]);
        $activite->titre = $valides["titre"];
        $activite->date = $valides["date"];
        $activite->heure = $valides["heure"];
        $activite->description = $valides["descritpion"];
        $activite->employe_id = auth()->id();
        $activite->image = $valides["image"];

        // Sauvegarder toutes les informations dans la BDD
        $activite->save();

        // Redirection
        return redirect()
                ->route('admin.activites.index')
                ->with('succes', "L'actualité a été modifiée avec succès!");
     }

    //=============================SUPPRIMER UNE ACTUALITÉ=============================//
    /**
    * Traite de la suppression d'une activité
    *
    * @param Request $request
    * @return RedirectResponse
    */
    public function destroy(Request $request) {

        // Redirection si ce n'est pas un administrateur
        if(auth()->guard('employe')->user()->role_id !== 1) {

            return redirect()
                    ->route('admin.activites.index')
                    ->with('erreur', 'Seul un administrateur peut supprimer une activité');
        }

        // Supprimer l'activité
        Activite::destroy($request->id);

        // Redirection
        return redirect()
                ->route('admin.activites.index')
                ->with('succes', "L'activite a été supprimée!");
    }
}
