<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Forfait;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUtilisateurController extends Controller
{
    /**
     * Affiche la liste des utilisateurs
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request) {

        // Allez chercher la requête de la recherche
        $requete = $request->input('user_recherche');

        // Initialise la recherche
        $requete_user = User::query();

        // Si une recherche est fournie, filtrer le résultat
        if (!empty($requete)) {
            $requete_user->where(function ($la_requete) use ($requete) {
                $la_requete->where('prenom', 'like', '%' . $requete . '%')
                        ->orWhere('nom', 'like', '%' . $requete . '%')
                        ->orWhere('email', 'like', '%' . $requete . '%');
            });
        }

        // Récupérer les utilisateurs en fonction de la requête
        $users = $requete_user->get();

        // Retourne la vue
        return view('admin.utilisateurs.index', [
            "users" => $users,
            "forfaits" => Forfait::all(),
            "reservations" => Reservation::all(),
        ]);
    }

    /**
     * Affichage de la page de modification d'un utilisateur
     *
     * @param id
     * @return View
     */
    public function edit(int $id){

        // Retrouver les informations de l'utilisateur
        $user = User::find($id);

        // Retourne la vue
        return view('admin.utilisateurs.edit', [
            'user' => $user
        ]);
    }

    /**
     * Insertion de la modification de l'utilisateur
     *
     * @param Request $request
     * @param id
     * @return View
     */
    public function update(Request $request, $id){

        // Redirection si ce n'est pas un administrateur qui se connecte
        if(auth()->guard('employe')->user()->role_id !== 1) {

            // Redirection
            return redirect()
                    ->route('admin.utilisateurs.index')
                    ->with('erreur', 'Seul un administrateur peut modifier un utilisateur');
        }

        // Récupérer l'utilisateur par son Id
        $user = User::find($id);

        // Validation
        $valides = $request->validate([
            "prenom" => "required|max:255",
            "nom" => "required|max:255",
            'email' => 'required|email|unique:users,email,' . $user->id,
            "ville" => "required",
            "age" =>"required|integer|min:18|max:99",
            "password" => "nullable|min:8",
            "confirmation_password" => "same:password"
        ],[
            "prenom.required" => "Le prénom est requis",
            "prenom.max" => "Le prénom doit avoir un maximum de :max caractères",
            "nom.required" => "Le nom est requis",
            "nom.max" => "Le nom doit avoir un maximum de :max caractères",
            "email.required" => "Le courriel est requis",
            "email.email" => "Le courriel doit avoir un format valide",
            "email.unique" => "Ce courriel ne peut pas être utilisé",
            "ville.required" => "La ville est requise",
            "age.required" => "L'âge est requise",
            "age.min" => "Vous devez avoir un minimum de :min ans",
            "age.max" => "Vous devez avoir un maximum de :max ans",
            "password.min" => "Le mot de passe doit avoir une longueur de :min caractères",
            "confirmation_password.same" => "Le mot de passe n'a pu être confirmé"
        ]);

        // Retrouver les informations de l'utilisateur
        $user->prenom = $valides["prenom"];
        $user->nom = $valides["nom"];
        $user->email = $valides["email"];
        $user->ville = $valides["ville"];
        $user->age = $valides["age"];

        // Insérer le mot de passe seulement si insérer dans le formulaire
        if (!empty($valides["password"])) {

                $user->password = Hash::make($valides["password"]);
        }

        // Sauvegarder toutes les informations dans la BDD
        $user->save();

        // Redirection
        return redirect()
                ->route('admin.utilisateurs.index')
                ->with('succes', "L'utilisateur à été modifié avec succès");
    }

    /**
     * Suppression de l'utilisateur
     *
     * @param int $id
     * @return View
     */
    public function destroy(int $id){

        // Redirection si ce n'est pas un administrateur qui se connecte
        if(auth()->guard('employe')->user()->role_id !== 1) {

            // Redirection
            return redirect()
                    ->route('admin.utilisateurs.index')
                    ->with('erreur', 'Seul un administrateur peut supprimer un employé');
        }

        // Section pour regarder si l'utilisateur à une réservation à son actif
        $user = User::find($id);
        $reservations = $user->reservations;

        if ($reservations->count() > 0) {
            return redirect()
                    ->route('admin.utilisateurs.index')
                    ->with('erreur', "Vous ne pouvez pas supprimer un utilisateur qui à une ou plusieurs réservations à son nom.");
        }

        // Supprimer l'utilisateur
        User::destroy($id);

        // Redirection
        return redirect()
                ->route('admin.utilisateurs.index')
                ->with('succes', "L'utilisateur a été supprimé");
    }
}
