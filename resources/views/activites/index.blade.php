<x-layout titre="Les activites">

{{-- <x-nav/> --}}
{{-- <x-hero/> --}}
    <h1>activites</h1>
    <h2>Vendredi</h2>
    <h2>Samedi</h2>
    <h2>Dimanche</h2>
    <h3>date de vendredi</h3>

    <section class="conteneur-activites">
        @foreach ($activites as $activite)
            <article class="activites vendredi">

                <div class="conteneur-image">
                    <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite">
                </div>
                <div class="titre">
                    titre {{ $activite->titre }}
                </div>

                <div class="date-publication">
                    heure {{ $activite->heure }}
                </div>
                <div class="date-publication">
                    endroit {{ $activite->endroit }}
                </div>
                <div class="description">
                    description {{ $activite->description }}
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
        <h3>date de vendredi</h3>
        @foreach ($activites as $activite)
            <article class="activites samedi">

                <div class="conteneur-image">
                    <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite">
                </div>
                <div class="titre">
                    titre {{ $activite->titre }}
                </div>

                <div class="date-publication">
                    heure {{ $activite->heure }}
                </div>
                <div class="date-publication">
                    endroit {{ $activite->endroit }}
                </div>
                <div class="description">
                    description {{ $activite->description }}
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
        <h3>date de vendredi</h3>
        @foreach ($activites as $activite)
            <article class="activites dimanche">

                <div class="conteneur-image">
                    <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite">
                </div>
                <div class="titre">
                    titre {{ $activite->titre }}
                </div>

                <div class="date-publication">
                    heure {{ $activite->heure }}
                </div>
                <div class="date-publication">
                    endroit {{ $activite->endroit }}
                </div>
                <div class="description">
                    description {{ $activite->description }}
                </div>
            </article>
        @endforeach
        <button>boutton voir plus</button>

    </section>
    {{-- <x-ban_billet /> --}}

    {{-- <x-footer /> --}}

</x-layout>
