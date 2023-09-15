<x-layout titre="Les activites">

    <x-nav />

    <main>
       {{-- <x-hero/> --}}
    <h1>activites</h1>
    <h2 class = "selected">Vendredi</h2>
    <h2>Samedi</h2>
    <h2>Dimanche</h2>
    <h2>2023 | 10 | 13</h2>

    <section class="conteneur-activites">
        @foreach ($vendrediActivites as $activite)
            <article class="activites vendredi">

                <div class="conteneur-image">
                    <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite">
                </div>

                <div class="conteneur-titre">

                    <div class="heur">
                        <p>heure {{ $activite->heure }}</p>
                    </div>

                    <div class="titre">
                        <p> titre {{ $activite->titre }}</p>
                    </div>
                    <div class="endroit">
                        <p>endroit {{ $activite->endroit }}</p>
                    </div>

                </div>


                <div class="description">
                    <p> description {{ $activite->description }}</p>
                </div>
            </article>
        @endforeach
        <button>boutton voir plus</button>

    </section>
    {{-- <x-ban_concours /> --}}
    <section class="conteneur-activites">
        <h2>Vendredi</h2>
        <h2>Samedi</h2>
        <h2>Dimanche</h2>
        <h2>date de samedi</h2>
        @foreach ($samediActivites as $activite)
            <article class="activites samedi">

                <div class="conteneur-image">
                    <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite">
                </div>

                <div class="conteneur-titre">

                    <div class="heur">
                        <p>heure {{ $activite->heure }}</p>
                    </div>

                    <div class="titre">
                        <p> titre {{ $activite->titre }}</p>
                    </div>
                    <div class="endroit">
                        <p>endroit {{ $activite->endroit }}</p>
                    </div>

                </div>


                <div class="description">
                    <p> description {{ $activite->description }}</p>
                </div>
            </article>
        @endforeach
        <button>boutton voir plus</button>

    </section>

    {{-- <x-ban_compte /> --}}

    <section class="conteneur-activites">
        <h2>Vendredi</h2>
        <h2>Samedi</h2>
        <h2>Dimanche</h2>
        <h2>date de dimanche</h2>
        @foreach ($dimancheActivites as $activite)
            <article class="activites dimanche">

                <div class="conteneur-image">
                    <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite">
                </div>

                <div class="conteneur-titre">

                    <div class="heur">
                        <p>heure {{ $activite->heure }}</p>
                    </div>

                    <div class="titre">
                        <p> titre {{ $activite->titre }}</p>
                    </div>
                    <div class="endroit">
                        <p>endroit {{ $activite->endroit }}</p>
                    </div>

                </div>


                <div class="description">
                    <p> description {{ $activite->description }}</p>
                </div>

            </article>
        @endforeach
        <button>boutton voir plus</button>

    </section>
    {{-- <x-ban_billet /> --}}
</main>
    <x-footer />

</x-layout>
