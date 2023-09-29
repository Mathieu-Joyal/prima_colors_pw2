<x-layout titre="Créez une actualité">


    <x-nav-admin titre="Les ActualitÉs" route="route('admin.activites.index')" valeur="Voir les activitÉs" />

    <section class="formulaire_recherche actualite">

        <form class="administration la_recherche" action="{{ route('admin.actualites.filter') }}" method="GET">
            @csrf


            <div class="conteneur-recherche">
                <label for="recherche">
                    <p class="actualite">Recherche par date:</p>

                </label>
                <select id="date_publication" name="date_publication">
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                </select>
            </div>

            {{-- <x-forms.erreur champ="user_recherche" /> --}}
            <div class="conteneur-bouton">
                <button class="recherche actualite" type="submit">
                    Faire la recherche
                </button>
            </div>
        </form>
    </section>

    <section>
        @if (isset($filter) && $filter->count() > 0)
        @foreach ($filter as $actualite)
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
        @else
        <p>No activities found for the selected date.</p>
    @endif
    </section>
</x-layout>
