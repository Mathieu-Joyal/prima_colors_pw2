<?php

namespace App\Http\Controllers\admin;

use App\Models\Activite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
class AdminActiviteController extends Controller
{
    //==================TOUTES LES ACTIVITÉS===========================//
    /**
     * Affiche la liste des activites
     *
     * @return View
     */

     public function index()
     {
        $vendrediActivites = Activite::whereDay('date', 13) ->get();
        $samediActivites = Activite::whereDay('date', 14) ->get();
        $dimancheActivites = Activite::whereDay('date', 15) ->get();

        return view ("activites.index", [
          "vendrediActivites" => $vendrediActivites,
          "samediActivites" => $samediActivites,
          "dimancheActivites" => $dimancheActivites,
        ]);


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
      * Traite l'ajout
      *
      * @param Request $request
      * @return RedirectResponse
     */
     public function store(Request $request) {
         // Valider
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
         $activite->image =

         $activite->save();

         // Rediriger
         return redirect()
                 ->route('admin.activites.index')
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
         Activite::destroy($request->id);

         return redirect()->route('admin.activites.index')
                 ->with('succes', "L'activite a été supprimée!");
     }
}
