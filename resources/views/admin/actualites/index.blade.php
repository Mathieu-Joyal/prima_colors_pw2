<x-layout titre="Créez une actualité">


    <x-nav-admin titre="Les ActualitÉs" route="route('admin.actualites.index')" valeur="Retour aux actualitÉs" />
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

            <div class="conteneur-btn">
                {{-- AJOUTER --}}
                <button class="ajouter">
                    <a href="/admin/actualites/create" class="">
                        Ajouter une actualité
                    </a>
                </button>
                {{-- MODIFICATION --}}
                <button class="modifier">
                    <a href="{{ route('admin.actualites.edit', ['id' => $actualite->id]) }}">
                        Modifier une actualité
                    </a>
                </button>
                {{-- SUPPRESSION --}}
                <form action="{{ route('admin.actualites.destroy') }}" method="POST">
                    @csrf

                    <input type="hidden" name="id" value="{{ $actualite->id }}">
                    <button class="supprimer" type="submit">

                        Supprimer l'actualité
                    </button>
                </form>

            </div>
        @endforeach
    </section>
</x-layout>
