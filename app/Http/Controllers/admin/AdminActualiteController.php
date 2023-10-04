<?php

namespace App\Http\Controllers\Admin;

use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;

class AdminActualiteController extends Controller
{

    //==================TOUTES LES ACTUALITÉS===========================//
    /**
     * Affiche la liste des actualites
     *
     * @return View
     */
    public function index()
    {
        $actualites = Actualite::all();

        return view("admin.actualites.index", [
            "actualites" => $actualites,
        ]);
    }
    /**
     * Filtrer les activites
     *
     * @return View
     */
    public function filter(Request $request)
    {
        $selectedYear = $request->input('date_publication');
        $actualites = Actualite::where('date_publication', 'LIKE', "%$selectedYear%")->get();

        return view('admin.actualites.index', compact('actualites'));
    }


    //===============AJOUTER UNE ACTUALITÉ=================================//
    /**
     * Affiche le formulaire d'ajout d'une activité
     *
     * @return View
     */
    public function create()
    {
        return view(
            'admin.actualites.create',
        );
    }

    /**
     * Traite l'ajout d'une activité
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        // Redirection si ce n'est pas un administrateur qui se connecte
        if(auth()->guard('employe')->user()->role_id !== 1) {

            // Redirection
            return redirect()
                    ->route('admin.actualites.index')
                    ->with('erreur', 'Seul un administrateur peut ajouter une actualité');
        }

        // Validation
        $valides = $request->validate([
            "titre" => "required|min:4|max:150",
            "description" => "required|min:50|max:350",
            "image" => "required|mimes:png,jpg,jpeg",

        ], [
            "titre.required" => "Le titre est requis",
            "titre.max" => "Le titre doit avoir un maximum de :max caractères",
            "titre.min" => "Le titre doit avoir un minimum de :min caractères",
            "description.required" => "La description est requise",
            "description.max" => "La description doit avoir un maximum de :max caractères",
            "description.min" => "La description doit avoir un minimum de :min caractères",
            "image.required" => "Une image doit être téléchargé ",
            "image.mimes" => "Le format de l'image doit être l'un des suivants :png, jpg, jpeg",
        ]);

        // Préparation à l'ajout à la BDD
        $actualite = new Actualite;
        $actualite->titre = $valides["titre"];
        $actualite->description = $valides["description"];
        $actualite->employe_id = auth()->guard('employe')->user()->id;
        $actualite->date_publication = now()->format("Y-m-d");

        // Traiter le téléversement
        if ($request->hasFile('image')) {
            // Déplacer
            Storage::putFile("public/uploads", $request->image);
            // Sauvegarder le "bon" chemin qui sera inséré dans la BDD et utilisé par le navigateur
            $actualite->image = "/storage/uploads/" . $request->image->hashName();
        }

        // Ajout à la BDD
        $actualite->save();

        // Redirection
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
    public function edit($id)
    {
        return view('admin.actualites.edit', [
            "actualite" => Actualite::findOrFail($id),
        ]);
    }

    /**
     * Traite la modification d'une actualité
     *
     * @param Request $request Objet qui contient tous les champs reçus dans la requête
     * @return RedirectResponse
     */
    public function update(Request $request)
    {

        // Redirection si ce n'est pas un administrateur
        if(auth()->guard('employe')->user()->role_id !== 1) {

            return redirect()
                    ->route('admin.actualites.index')
                    ->with('erreur', 'Seul un administrateur peut modifier une actualité');
        }

        // Validation
        $valides = $request->validate([
            "id" => "required",
            "titre" => "required|min:4|max:150",
            "image" => "required|",
            "descritpion" => "required"
        ], [
            "titre.required" => "Le titre est requis",
            "titre.max" => "Le titre doit avoir un maximum de :max caractères",
            "titre.min" => "Le titre doit avoir un minimum de :min caractères",
            "description.required" => "La description est requise",
            "description.max" => "La description doit avoir un maximum de :max caractères",
            "description.min" => "La description doit avoir un minimum de :min caractères",
            "image.required" => "Une image doit être téléchargé ",
            "image.mimes" => "Le format de l'image doit être l'un des suivants :png, jpg, jpeg",
        ]);

        // Récupération de l'actualité à modifier, suivi de la modification et sauvegarde
        $actualite = Actualite::findOrFail($valides["id"]);
        $actualite->titre = $valides["titre"];
        $actualite->description = $valides["descritpion"];
        $actualite->employe_id = auth()->id();
        $actualite->image =

        $actualite->save();

        // Redirection
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
    public function destroy(Request $request)
    {

        // Redirection si ce n'est pas un administrateur
        if(auth()->guard('employe')->user()->role_id !== 1) {

            return redirect()
                    ->route('admin.actualites.index')
                    ->with('erreur', 'Seul un administrateur peut supprimer une actualité');
        }

        Actualite::destroy($request->id);

        return redirect()->route('admin.actualites.index')
            ->with('succes', "La actualite a été supprimée!");
    }
}
