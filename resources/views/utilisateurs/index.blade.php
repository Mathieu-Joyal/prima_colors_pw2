<x-layout titre="Bienvenue!">

    <x-header />

    {{-- <x-alertes.succes cle="succes" /> --}}

    <div class="deconnexion">
        {{-- Pourrait être une composante? --}}

        <form action="{{ route('deconnexion') }}" method="POST">
            @csrf
            <input type="submit" value="Déconnexion">
        </form>

    </div>

    <h2>Bonjour {{ $user->prenom }}!</h2>

    <section class="forfaits">

        @foreach ($forfaits as $forfait)
            <article class="un_forfait">
                <div>
                    {{ $forfait->titre }}
                </div>
                <div>
                    {{ $forfait->description }}
                </div>
                <div>
                    {{ $forfait->date_arrive }} - {{ $forfait->date_depart }}
                </div>
                <div>
                    {{ $forfait->prix }}$
                </div>
            </article>
        @endforeach

    </section>

    <section class="selection_forfait">

        <h3>Choissisez votre forfait</h3>

        <form action="{{ route('reservations.store') }}" method="POST">
            @csrf

            <select name="forfait" id="forfait">

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
                <div>
                    {{ $reservation->forfait->titre }}
                </div>

                <a href="{{ route('reservations.destroy', ['id' => $reservation->id]) }}">
                    <span>
                        Annuler la réservation
                    </span>
                </a>
            </article>

        @endforeach

    </section>

    <section class="concours">

        <form action="{{ route('utilisateurs.updateConcours') }}"
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

                    {{-- <x-forms.erreur champ="titre" /> --}}

                </div>
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

                    {{-- <x-forms.erreur champ="image_oeuvre" /> --}}

                </div>

            </div>

            <div>
                <button type="submit">
                    Soumettez votre oeuvre!
                </button>
            </div>
        </form>

    </section>

    <x-footer />

</x-layout>
