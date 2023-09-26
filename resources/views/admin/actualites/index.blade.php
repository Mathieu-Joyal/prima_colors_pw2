<x-layout titre="Créez une actualité">

    <div class="conteneur-titre-actualites-admin">
        <h2>les actualitÉs</h2>
    <button class="ajouter-activite">
        <a href="/admin/actualites/create" class="nav">
           Ajouter une actualité
        </a>
</button>
    </div>
<div class="actualites-admin">
    @foreach ($actualitesRecentes as $actualite)

        <article class="conteneur-articles-actualites">

            <div class="conteneur-gauche">

                <div class="date-publication">
                    <h4> {{ $actualite->date_publication }}</h4>
                </div>

                <div class="conteneur-titre">
                    <div class="titre-actualite">
                        <h3>{{ $actualite->titre }}</h3>
                    </div>

                    <div class="description">
                        <p class="">{{ $actualite->description }}
                        </p>
                        <p>{{ $actualite->description }} </p>
                    </div>

                    <div class="conteneur-btn">
                        {{-- MODIFICATION --}}
                        <button class="modifier-activite">
                            <a href="{{ route('admin.actualites.edit', ["id" => $actualite->id]) }}">
                                Modifier une actualité
                             </a>
                        </button>
                         {{-- SUPPRESSION --}}
                         <form action="{{ route('admin.actualites.destroy') }}" method="POST">
                            @csrf

                            <input type="hidden" name="id" value="{{ $actualite->id }}">
                            <button class="supprimer-activite" type="submit">

                                    Supprimer l'actualité

                            </button>
                        </form>

                    </div>
                </div>
            </div>

            <div class="conteneur-image">
                <img class="thumbnail" src="{{asset($actualite->image)  }}" alt="image de l'actualite">
                {{-- <img class="thumbnail" src="{{ asset('img\actualites\1.png') }}"
                            alt=""> --}}
            </div>

        </article>
    @endforeach
</div>
</x-layout>
