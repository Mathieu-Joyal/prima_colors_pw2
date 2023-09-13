<x-layout titre="Les activites">

    <x-nav />
    <h1>activites</h1>
    <h2>Nouveauté de la scène 2023</h2>

    <section class="conteneur-activites">
        @foreach ($activites as $activite)
            <article class="activites">

                <div class="conteneur-image">
                    <img class="thumbnail" src="{{ $activite->poster }}" alt="image de l'activite">
                </div>
                <div class="titre">
                    {{ $activite->titre }}
                </div>

                <div class="date-publication">
                    {{ $activite->date_publication }}
                </div>
                <div class="description">
                    {{ $activite->description }}
                </div>

            </article>

        @endforeach
    </section>

<x-ban_concours />
    <x-footer />

</x-layout>
