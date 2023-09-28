<x-layout titre="Bienvenue!">

    <x-header />

    <x-boutons.accueil_admin />

    <x-boutons.deconnexion
        route="{{ route('admin.deconnexion') }}"
    />



    @if ( auth()->guard('employe')->user()->role_id === 1)

        <x-boutons.soumettre
            route="{{ route('admin.enregistrement.create') }}"
            valeur="Création d'un employé"
        />

    @endif

    <x-alertes.succes cle="succes" />

    <section class="formulaire_recherche">

        <form class="administration la_recherche"
                action="{{ route('admin.employes.index') }}"
                method="GET"
        >
            @csrf

            <div class="barre_recherche">

                <label for="user_recherche">
                    Recherche:
                </label>

                    <input
                        id="user_recherche"
                        name="user_recherche"
                        type="text"
                        placeholder="Recherchez un utilisateur"
                        autofocus
                    >
            </div>

            {{-- <x-forms.erreur champ="user_recherche" /> --}}

            <button type="submit">
                Faire la recherche
            </button>
        </form>

        <div class="bouton_liste_complete">

            <x-boutons.liste_complete
                route="{{ route('admin.employes.index') }}"
                valeur="utilisateurs"
            />

        </div>
    </section>

    <div class="conteneur_admin">

        <section class="affichage-employes">

            <h3 class="h3_user">AFFICHAGE DE LA LISTE DES EMPLOYÉS</h3>

            <article class="un_utilisateur">
                <div class="conteneur_user">
                    <div class="infos_user">
                        <p class="titre_user">Prénom</p>
                        <p class="titre_user">Nom</p>
                        <p class="titre_user">Identifiant</p>
                        <p class="titre_user">Rôle</p>
                    </div>
                </div>
            </article>

            @foreach ($employes as $employe)

            <article class="un_utilisateur">

                <div class="conteneur_user">

                    <div class="infos_user">
                        <p>{{ $employe->prenom }}</p>
                        <p>{{ $employe->nom }}</p>
                        <p>{{ $employe->identifiant }}</p>
                        <p>{{ $employe->role_id }}</p>
                    </div>

                    @if ( auth()->guard('employe')->user()->role_id === 1)

                        <div class="boutons_user">
                            <a href="{{ route('admin.employes.edit', ['id' => $employe->id ]) }}">
                                <span class="edit">
                                    🅴🅳🅸🆃
                                </span>
                            </a>
                            <a href="{{ route('admin.employes.destroy', ['id' => $employe->id ]) }}">
                                <span class="delete">
                                    🅳🅴🅻🅴🆃🅴
                                </span>
                            </a>
                        </div>
                    @endif
                </article>
            @endforeach
        </section>
        </div>
    </div>

    <x-footer />

</x-layout>
