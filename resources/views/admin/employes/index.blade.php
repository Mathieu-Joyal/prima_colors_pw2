<x-layout titre="Bienvenue!">

    <x-header />

    <x-alertes.succes cle="succes" />

    <x-boutons.accueil_admin />

    <x-boutons.deconnexion
        route="{{ route('admin.deconnexion') }}"
        />

    <x-boutons.soumettre
        route="{{ route('admin.employes.create') }}"
        valeur="Création d'un employé"
    />

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
                </article>
            @endforeach
        </section>
        </div>
    </div>

    <x-footer />

</x-layout>
