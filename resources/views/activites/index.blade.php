<x-layout titre="Les activites">


    <h1>activites</h1>
    <h2>Nouveauté de la scène 2023</h2>

    <section class="conteneur-activites">
        @foreach ($activites as $activite)
            <article class="activites">

                <div class="conteneur-image">
                    <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite">
                </div>
                <div class="titre">
                   titre {{ $activite->titre }}
                </div>

                <div class="date-publication">
                 date   {{ $activite->date }}
                </div>
                <div class="date-publication">
                 heure   {{ $activite->heure }}
                </div>
                <div class="date-publication">
                 endroit   {{ $activite->endroit }}
                </div>
                <div class="description">
                  description  {{ $activite->description }}
                </div>

            </article>

        @endforeach
    </section>


    <x-footer />

</x-layout>
