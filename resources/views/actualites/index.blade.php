<x-layout titre="Les actualités">

    {{-- <x-nav /> --}}
    {{-- <x-hero/> --}}
    <h1>Actualités</h1>


    <section class="conteneur-actualites">
        <h2>Nouveauté de la scène 2023</h2>
        @foreach ($actualitesRecentes as $actualite)
            <article class="actualites">

                <div class="conteneur-image">
                    <img class="thumbnail" src="{{ $actualite->image }}" alt="image de l'actualite">
                </div>
                <div class="titre">
                    {{ $actualite->titre }}
                </div>

                <div class="date-publication">
                    {{ $actualite->date_publication }}
                </div>
                <div class="description">
                    {{ $actualite->description }}
                </div>

            </article>
        @endforeach
    </section>
    {{-- <x-ban_concours/> --}}
    <section class="conteneur-actualites">
        <h2>2022</h2>
        @foreach ($actualitesAnciennes as $actualite)
            <article class="actualites">

                <div class="conteneur-image">
                    <img class="thumbnail" src="{{ $actualite->image }}" alt="image de l'actualite">
                </div>
                <div class="titre">
                    {{ $actualite->titre }}
                </div>

                <div class="date-publication">
                    {{ $actualite->date_publication }}
                </div>
                <div class="description">
                    {{ $actualite->description }}
                </div>

            </article>
        @endforeach
    </section>

    {{-- <x-ban_billet/> --}}
    {{-- <x-footer /> --}}

</x-layout>
