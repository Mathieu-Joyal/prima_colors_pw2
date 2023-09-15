<x-layout titre="Les activites">

<x-nav/>
{{-- <x-hero/> --}}
    <h1>activites</h1>
    <h2>Vendredi</h2>
    <h2>Samedi</h2>
    <h2>Dimanche</h2>
    <h3>date de vendredi</h3>

    <section class="conteneur-activites">
        @foreach ($vendrediActivites as $activite)
            <article class="activites vendredi">

                <div class="conteneur-image">
                    <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite">
                </div>
                <div class="titre">
                    <p>titre {{ $activite->titre }}</p>

                </div>

                <div class="date-publication">
                    <p>heure {{ $activite->heure }}</p>

                </div>
                <div class="date-publication">
                    <p> endroit {{ $activite->endroit }}</p>

                </div>
                <div class="description">
                    <p>description {{ $activite->description }}</p>

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
        <h3>date de samedi</h3>
        @foreach ($samediActivites as $activite)
            <article class="activites samedi">

                <div class="conteneur-image">
                    <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite">
                </div>
                <div class="titre">
                    <p>titre {{ $activite->titre }}</p>

                </div>

                <div class="date-publication">
                    <p>  heure {{ $activite->heure }}</p>

                </div>
                <div class="date-publication">
                    <p> endroit {{ $activite->endroit }}</p>

                </div>
                <div class="description">
                    <p>description {{ $activite->description }}</p>

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
        <h3>date de dimanche</h3>
        @foreach ($dimancheActivites as $activite)
            <article class="activites dimanche">

                <div class="conteneur-image">
                    <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite">
                </div>
                <div class="titre">
                    <p>  titre {{ $activite->titre }}</p>

                </div>

                <div class="date-publication">
                    <p>heure {{ $activite->heure }}</p>

                </div>
                <div class="date-publication">
                    <p>endroit {{ $activite->endroit }}</p>

                </div>
                <div class="description">
                    <p>   description {{ $activite->description }}</p>

                </div>
            </article>
        @endforeach
        <button>boutton voir plus</button>

    </section>
    {{-- <x-ban_billet /> --}}

    {{-- <x-footer /> --}}

</x-layout>
