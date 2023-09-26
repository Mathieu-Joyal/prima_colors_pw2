<x-layout titre="Liste des réservations">

    <x-header />

    <div class="conteneur_admin">

    <x-boutons.deconnexion
        route="{{ route('admin.deconnexion') }}"
    />

    <x-boutons.accueil_admin />

    <x-alertes.succes cle="succes" />

    @if(session('error'))
        <div class="">
            {{ session('error') }}
        </div>
    @endif

    <h3 class="h3_user">LISTE DES RÉSERVATIONS</h3>

        <article class="un_utilisateur">

            <div class="conteneur_user">

                <div class="infos_user">

                    <p class="titre_user">Prénom</p>
                    <p class="titre_user">Nom</p>
                    <p class="titre_user">Adresse courriel</p>
                </div>
            </div>
        </article>

        @foreach ($reservations as $reservation)

            <article class="un_utilisateur">

                <div class="conteneur_user">


                    <div class="infos_user">

                        <p>{{ $reservation->user->prenom }}</p>
                        <p>{{ $reservation->user->nom }}</p>
                        <p>{{ $reservation->user->email }}</p>
                    </div>

                    <div class="un_forfait">
                        <p>{{ $reservation->forfait->titre }}</p>
                    </div>

                    <div class="admin_reservation_conteneur_bouton">
                        <form action="{{ route('admin.reservations.destroy', ['id' => $reservation->id]) }}" method="POST">
                            @csrf
                            <button class="bt_user_cancel" type="submit">
                                Annuler la réservation
                            </button>
                        </form>
                    </div>
                </div>
            </article>
        @endforeach

    </div>

    <x-footer />

</x-layout>
