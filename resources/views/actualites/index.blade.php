<x-layout titre="Les actualités">

    <x-nav />
    <h1>Actualités</h1>
    <h2>Nouveauté de la scène 2023</h2>

    <section class="conteneur-actualites">
        @foreach ($actualites as $actualite)
            <article class="actualites">

                <div class="conteneur-image">
                    <img class="thumbnail" src="{{ $actualite->poster }}" alt="image de l'actualite">
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

    <x-footer />

</x-layout>
