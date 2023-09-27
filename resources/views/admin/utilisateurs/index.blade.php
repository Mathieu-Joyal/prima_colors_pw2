<x-layout titre="Bienvenue!">

    <x-header />

    <x-boutons.accueil_admin />

    <x-boutons.deconnexion
        route="{{ route('admin.deconnexion') }}"
    />

    <x-alertes.succes cle="succes" />

    @if(session('error'))
        <div class="">
            {{ session('error') }}
        </div>
    @endif

    <section class="formulaire_recherche">

        <form class="administration la_recherche"
                action="{{ route('admin.utilisateurs.index') }}"
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
                route="{{ route('admin.utilisateurs.index') }}"
                valeur="utilisateurs"
            />

        </div>
    </section>

    <div class="conteneur_admin">

        <section class="affichage-employes">

            <h3 class="h3_user">AFFICHAGE DE LA LISTE DES UTILISATEURS</h3>

            {{-- Best solution: barre de recherche
            Fastest solution: orderby --}}

            <article class="un_utilisateur">
                <div class="conteneur_user">
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

                        <div class="boutons_user">
                            <a href="{{ route('admin.utilisateurs.edit', ['id' => $user->id ]) }}">
                                <span>
                                    🅴🅳🅸🆃
                                </span>
                            </a>
                            <a href="{{ route('admin.utilisateurs.destroy', ['id' => $user->id ]) }}">
                                <span>
                                    🅳🅴🅻🅴🆃🅴
                                </span>
                            </a>
                        </div>
                    </div>

                        @foreach ($reservations as $reservation)

                            @if ($reservation->user_id === $user->id)

                                <div class="une_reservation">
                                    <p>
                                        {{ $reservation->forfait->titre }}
                                    </p>

                                    <form action="{{ route('admin.reservations.destroy', ['id' => $reservation->id]) }}" method="POST">
                                        @csrf
                                        <button class="bt_user_cancel" type="submit">
                                            Annuler la réservation
                                        </button>
                                    </form>
                                </div>
                            @endif
                        @endforeach
                </article>
            @endforeach
        </section>
    </div>

    <x-footer />

</x-layout>
