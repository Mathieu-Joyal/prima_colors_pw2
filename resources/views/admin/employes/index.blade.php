<x-layout titre="Liste des employés">

    <x-nav-admin
        titre="Les employés"
        route="{{ route('admin.employes.index') }}"
        valeur="Retour aux employes"
    />

    <x-alertes cle="succes" class="alerte_succes"/>
    <x-alertes cle="erreur" class="alerte_erreur"/>

    <x-forms.formulaire_recherche
        route="{{ route('admin.employes.index') }}"
        placeholder="Recherchez un employé"
        valeur="employés"
    />

    <div class="conteneur_admin">

        <section class="affichage-employes">

            @if ( auth()->guard('employe')->user()->role_id === 1)

                <x-boutons.soumettre
                    route="{{ route('admin.enregistrement.create') }}"
                    valeur="Création d'un employé"
                />

            @endif

            <h3 class="h3_user">AFFICHAGE DE LA LISTE DES EMPLOYÉS</h3>

            <article class="un_utilisateur">
                <div class="conteneur_user"  style="background-color: transparent">
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


                        @foreach ($roles as $role )

                        @if ($employe->role_id === $role->id)

                        <p>{{ $role->nom }}</p>
                        @endif

                        @endforeach




                    </div>

                    @if ( auth()->guard('employe')->user()->role_id === 1)

                        <div class="boutons_user">
                            <a href="{{ route('admin.employes.edit', ['id' => $employe->id ]) }}">
                                <span class="edit">
                                    ✐
                                </span>
                            </a>
                            <a href="{{ route('admin.employes.destroy', ['id' => $employe->id ]) }}">
                                <span class="delete">
                                    ♵
                                </span>
                            </a>
                        </div>
                    @endif
                </article>
            @endforeach
        </section>
        </div>
    </div>

    <x-footer-admin />

</x-layout>
