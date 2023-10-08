<x-layout-admin titre="Liste des réservations">

    <x-nav-admin
        titre="les réservations"
        route="{{ route('admin.reservations.index') }}"
        valeur="Retour aux réservations"
    />

    <x-alertes cle="succes" class="alerte_succes"/>
    <x-alertes cle="erreur" class="alerte_erreur" />

    <x-forms.formulaire_recherche
        route="{{ route('admin.reservations.index') }}"
        placeholder="Recherchez une réservation"
        valeur="réservations"
    />

    <div class="conteneur_admin">

        <section class="affichage-employes">

            <h3 class="h3_user">LISTE DES RÉSERVATIONS</h3>

                <article class="un_utilisateur">

                    <div class="conteneur_user" style="background-color: transparent">

                        <div class="infos_user">

                            <p class="titre_user">Prénom</p>
                            <p class="titre_user">Nom</p>
                            <p class="titre_user">Adresse courriel</p>
                        </div>
                    </div>
                </article>

            @foreach ($reservations as $reservation)

                <article class="un_utilisateur">

                    <div class="conteneur_user liste_des_reservations">

                        <div class="infos_user">

                            <p>{{ $reservation->user->prenom }}</p>
                            <p>{{ $reservation->user->nom }}</p>
                            <p>{{ $reservation->user->email }}</p>
                        </div>

                        <div class="un_forfait">
                            <div>
                                <p>{{ $reservation->forfait->titre }}</p>
                            </div>
                            <div class="admin_reservation_conteneur_bouton">
                                <form action="{{ route('admin.reservations.destroy', ['id' => $reservation->id]) }}" method="POST">
                                    @csrf
                                    <button class="bt_user_cancel" type="submit">
                                        ♵
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </section>

    </div>

</x-layout-admin>
