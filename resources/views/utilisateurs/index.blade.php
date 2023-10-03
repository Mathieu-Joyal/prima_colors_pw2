<x-layout titre="Festival Prima-Colors | Mon compte: Bienvenue!">

    <x-header />

    <x-alertes cle="succes" />

    <div class="conteneur-utilisateur">

        <x-boutons.deconnexion routeDeconnexion="{{ route('deconnexion') }}" />

        <h2>
            Bonjour {{ $user->prenom }} {{ $user->nom }}!
        </h2>

        <p class="presentation">Bienvenue à votre compte utilisateur. Ici, vous pourrez voir la liste des forfaits disponibles, en plus de réservez votre billet pour l'un de ceux-ci. Vous pouvez aussi participer au concours d'art numérique, nous serions heureux de voir vos talents. Bonne visite!</p>

        <section class="forfaits">

            <h3>Liste des forfaits disponibles</h3>

            @foreach ($forfaits as $forfait)

                <article class="activites-admin">
                    <div class="conteneur-grid">
                        <!-- Row 1 -->
                        <div class="grid-item">
                            <h3 class="grid-title">Titre</h3>
                            <p>{{ $forfait->titre }}</p>
                        </div>

                        <div class="grid-item">
                            <h3 class="grid-title">Date</h3>
                            <p>{{ $forfait->date_arrive }}</p>
                        </div>

                        <div class="grid-item">
                            <h3 class="grid-title">Date</h3>
                            <p>{{ $forfait->prix }}</p>
                        </div>
                    </div>
                    <div class="conteneur-grid">

                        <div class="description">

                            <h3 class="grid-title">Description</h3>
                            <p>{{ $forfait->description }}</p>
                        </div>
                    </div>
                </article>
            @endforeach
        </section>

        <section class="selection_forfait">

            <h3>Choissisez votre forfait</h3>

            <form class="administration" action="{{ route('reservations.store') }}"
                    method="POST"
            >
                @csrf
                <select
                    name="forfait"
                    id="forfait"
                    class="decoration"
                >
                    @foreach ($forfaits as $forfait)

                        <option value="{{ $forfait->id }}">{{ $forfait->titre }}</option>
                    @endforeach
                </select>

                <div>
                    <button type="submit">
                        Confirmer ce forfait
                    </button>
                </div>
            </form>
        </section>

        <section class="forfaits_reserve">

            <h3>Vos forfaits réservés</h3>

            @foreach ($reservations as $reservation)

                    <article class="une_reservation">

                        <h4>
                            {{ $reservation->forfait->titre }}
                        </h4>
                        <p>
                            {{ $reservation->forfait->description }}
                        </p>
                        <div>
                            <p class="les_dates">
                                Date d'arrivé: {{ $reservation->forfait->date_arrive }}
                            </p>
                            <p class="les_dates">
                                Date de départ: {{ $reservation->forfait->date_depart }}
                            </p>
                        </div>
                        <p>
                        Coût du forfait: {{ $reservation->forfait->prix }}$
                        </p>

                        <form action="{{ route('reservations.destroy', ['id' => $reservation->id]) }}" method="POST">
                            @csrf

                            <button type="submit">
                                Annuler la réservation
                            </button>
                        </form>

                    </article>
            @endforeach

            @if ($reservations->isEmpty())
                <p>Aucune réservation pour le moment.</p>
            @endif
        </section>

        <section class="le_concours">

            <h3>Participer au concours!</h3>

            <form class="administration" action="{{ route('utilisateurs.updateConcours') }}"
                    method="POST"
                    enctype="multipart/form-data"
            >
                @csrf

                <div>

                    <label for="titre_oeuvre">
                        Titre de l'oeuvre
                    </label>

                    <div>
                        <input
                            id="titre_oeuvre"
                            name="titre_oeuvre"
                            type="text"
                            value="{{ old('titre') }}"
                        >
                    </div>
                    <x-forms.erreur champ="titre" />
                </div>

                <div>

                    <label for="image_oeuvre">
                        Fichier de l'oeuvre
                    </label>

                    <div>
                        <input
                            id="image_oeuvre"
                            name="image_oeuvre"
                            type="file"
                        >
                    </div>
                    <p class="notice">Seul les fichiers PNG, JPG et JPEG sont acceptés</p>

                    <x-forms.erreur champ="image_oeuvre" />
                </div>

                <div>
                    <button type="submit">
                        Soumettez votre oeuvre!
                    </button>
                </div>
            </form>
        </section>

        @if ($user->image_oeuvre != null)

            <section class="un_concours">

                <h3>Votre participation</h3>

                <h4>{{$user->titre_oeuvre}}</h4>

                <div>
                    <img src="{{ $user->image_oeuvre }}" alt="{{ $user->titre_oeuvre }}" style="max-width: 500px">
                </div>
            </section>
        @endif
    </div>

    <x-footer />

</x-layout>
