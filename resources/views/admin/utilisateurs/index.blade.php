<x-layout titre="Bienvenue!">

    <x-header />

    <x-alertes.succes cle="succes" />

    <div class="conteneur">

        <section class="affichage-employes">

            <h3>AFFICHAGE DE LA LISTE DES UTILISATEURS</h3>

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
