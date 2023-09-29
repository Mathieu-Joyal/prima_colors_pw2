<x-layout titre="Créez une actualité">


    <x-nav-admin titre="Les ActualitÉs" route="route('admin.activites.index')" valeur="Voir les aux activitÉs" />
    <section>
        @foreach ($actualitesRecentes as $actualite)
            <article class="conteneur-articles-actualites admin">

                <div class="conteneur-gauche">

                    <div class="date-publication">
                        <h4> {{ $actualite->date_publication }}</h4>
                    </div>

                    <div class="conteneur-titre">
                        <div class="titre-actualite">
                            <h3>{{ $actualite->titre }}</h3>
                        </div>

                        <div class="description-actualites">
                            <p class="">{{ $actualite->description }}
                            </p>
                            <p>{{ $actualite->description }} </p>
                        </div>
                    </div>
                </div>

                <div class="conteneur-image">
                    <img class="image" src="{{ asset($actualite->image) }}" alt="image de l'actualite">
                </div>
            </article>

            <x-boutons.gestion_activites_actualites routeAjouter="route('admin.actualites.create')"
            routeModifier="route('admin.actualites.edit', ['id'=>$actualite->id])"
            routeSupprimer="route('admin.actualites.destroy')" valeur="{{ $actualite->id }}" nom="actualité"/>
        @endforeach
    </section>
</x-layout>
