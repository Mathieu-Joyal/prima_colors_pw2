<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employe;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminEmployeController extends Controller
{
    /**
     * Affichage de la liste des employés
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request) {

        // Allez chercher la requête de la recherche
        $requete = $request->input('user_recherche');

        // Initialise la recherche
        $requete_user = Employe::query();

        // Si une recherche est fournie, filtrer le résultat
        if (!empty($requete)) {
            $requete_user->where(function ($la_requete) use ($requete) {
                $la_requete->where('prenom', 'like', '%' . $requete . '%')
                        ->orWhere('nom', 'like', '%' . $requete . '%')
                        ->orWhere('identifiant', 'like', '%' . $requete . '%');
            });
        }

        // Récupérer les utilisateurs en fonction de la requête
        $employes = $requete_user->get();

        // Retourne la vue
        return view('admin.employes.index', [
            "employes" => $employes,
            "roles" => Role::all()
        ]);
    }

    /**
     * Affichage de la page de modification d'un employé
     *
     * @param int $id
     * @return View
     */
    public function edit(int $id){

        // Retrouver les informations de l'employé
        $un_employe = Employe::find($id);

        // Retourne la vue
        return view('admin.employes.edit', [
            'un_employe' => $un_employe,
            'roles' => Role::all()
        ]);
    }

    /**
     * Insertion de la modification de l'employé
     *
     * @return View
     */
    public function update(Request $request, $id){

        // Redirection si ce n'est pas un administrateur qui se connecte
        if(auth()->guard('employe')->user()->role_id !== 1) {

            // Redirection
            return redirect()
            ->route('admin.employes.index')
            ->with('succes', 'Seul un administrateur peut supprimer un employé');
        }

        // Rechercher l'employé
        $un_employe = Employe::find($id);

        // Validation
        $valides = $request->validate([
            "prenom" => "required|max:255",
            "nom" => "required|max:255",
            'identifiant' => 'required|integer|min:1000000|max:9999999|unique:employes,identifiant,' . $un_employe->id,
            "password" => "nullable|min:8",
            "confirmation_password" => "same:password"
        ],[
            "prenom.required" => "Le prénom est requis",
            "prenom.max" => "Le prénom doit avoir un maximum de :max caractères",
            "nom.required" => "Le nom est requis",
            "nom.max" => "Le nom doit avoir un maximum de :max caractères",
            "identifiant.required" => "L'identifiant est requis",
            "identifiant.unique" => "Cet identifiant ne peut pas être utilisé",
            "identifiant.min" => "L'identifiant doit être plus grand que :min",
            "identifiant.max" => "L'identifiant doit être plus petit que :max",
            "password.min" => "Le mot de passe doit avoir une longueur de :min caractères",
            "confirmation_password.same" => "Le mot de passe n'a pu être confirmé"
        ]);

        // Retrouver les informations de l'utilisateur
        $un_employe->prenom = $valides["prenom"];
        $un_employe->nom = $valides["nom"];
        $un_employe->identifiant = $valides["identifiant"];

        // Insérer le mot de passe seulement si insérer dans le formulaire
        if (!empty($valides["password"])) {

            $un_employe->password = Hash::make($valides["password"]);
        }

        // Sauvegarder toutes les informations dans la BDD
        $un_employe->save();

        // Redirection
        return redirect()
                ->route('admin.employes.index')
                ->with('succes', "L'employé à été modifié avec succès");
    }

    /**
     * Suppression d'un employé
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id){

        // Redirection si ce n'est pas un administrateur qui se connecte
        if(auth()->guard('employe')->user()->role_id !== 1) {

            // Redirection
            return redirect()
            ->route('admin.employes.index')
            ->with('succes', 'Seul un administrateur peut supprimer un employé');
        }

        // Supprimer l'employé
        Employe::destroy($id);

        // Redirection
        return redirect()->route('admin.employes.index')
            ->with('succes', "L'employé a été supprimé");
    }
}
