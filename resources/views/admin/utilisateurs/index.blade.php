<x-layout titre="Liste des utilisateurs">

    <x-nav-admin
        titre="Les Utilisateurs"
        route="{{ route('admin.utilisateurs.index') }}"
        valeur="Retour aux utilisateurs"
    />

    <x-alertes cle="succes" class="alerte_succes"/>
    <x-alertes cle="erreur" class="alerte_erreur" />

    <x-forms.formulaire_recherche
        route="{{ route('admin.utilisateurs.index') }}"
        placeholder="Recherchez un utilisateur"
        valeur="utilisateurs"
    />

    <div class="conteneur_admin">

        <section class="affichage-employes">

            <h3 class="h3_user">AFFICHAGE DE LA LISTE DES UTILISATEURS</h3>

            <article class="un_utilisateur">
                <div class="conteneur_user" style="background-color: transparent">
                    <div class="infos_user">
                        <p class="titre_user">Prénom</p>
                        <p class="titre_user">Nom</p>
                        <p class="titre_user">Adresse courriel</p>
                    </div>
                </div>
            </article>

            @foreach ($users as $user)

                <article class="un_utilisateur">

                    <div class="conteneur_user">

                        <div class="infos_user">
                            <p>{{ $user->prenom }}</p>
                            <p>{{ $user->nom }}</p>
                            <p>{{ $user->email }}</p>
                        </div>

                        @if ( auth()->guard('employe')->user()->role_id === 1)

                            <div class="boutons_user">
                                <a href="{{ route('admin.utilisateurs.edit', ['id' => $user->id ]) }}">
                                    <span class="edit">
                                        🅴🅳🅸🆃
                                    </span>
                                </a>
                                <a href="{{ route('admin.utilisateurs.destroy', ['id' => $user->id ]) }}">
                                    <span class="delete">
                                        🅳🅴🅻🅴🆃🅴
                                    </span>
                                </a>
                            </div>
                        @endif
                    </div>

                    @foreach ($reservations as $reservation)

                        @if ($reservation->user_id === $user->id)

                            <div class="une_reservation">
                                <p>
                                    {{ $reservation->forfait->titre }}
                                </p>

                                @if ( auth()->guard('employe')->user()->role_id === 1)

                                    <form action="{{ route('admin.reservations.destroy', ['id' => $reservation->id]) }}" method="POST">
                                        @csrf
                                        <button class="bt_user_cancel" type="submit">
                                            Annuler la réservation
                                        </button>
                                    </form>
                                @endif
                            </div>
                        @endif
                    @endforeach
                </article>
            @endforeach
        </section>
    </div>

</x-layout>
