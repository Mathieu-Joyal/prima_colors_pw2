@props(["route", "placeholder", "valeur"])

<section class="formulaire_recherche">

    <form class="administration la_recherche" action="{{ $route }}" method="GET">
        @csrf

        <div class="barre_recherche">

            <label for="user_recherche">
                Recherche:
            </label>

            <input id="user_recherche" name="user_recherche" type="text" placeholder="{{ $placeholder }}" autofocus>
        </div>

        <button type="submit">
            Faire la recherche
        </button>
    </form>

    <div class="bouton_liste_complete">

        <x-boutons.liste_complete route="{{ $route }}" valeur="{{ $valeur }}" />

    </div>
</section>