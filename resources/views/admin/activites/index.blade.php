<x-layout titre="Créez une activité">
    <button>
        <a href="/admin/activites/create" class="nav">
            Ajouter une activité
        </a>

    </button>
    @foreach ($vendrediActivites as $key => $activite)


                    <div class="conteneur-image">
                        <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite">
                        {{-- <img class="thumbnail" src="{{ asset('img\activites\cereals.png') }}" alt=""
                            loading="lazy"> --}}

                        <div class="description">
                            <p> description {{ $activite->description }}</p>
                        </div>
                    </div>

                    <div class="conteneur-titre">

                        <div class="heure">
                            <p class="heure">heure {{ $activite->heure }}</p>
                        </div>

                        <div class="titre">
                            <p> titre {{ $activite->titre }}</p>
                        </div>

                        <div class="endroit">
                            <p>endroit {{ $activite->endroit }}</p>
                        </div>
                    </div>


                    <div class="conteneur-btn">
                        {{-- MODIFICATION --}}
                        <button>
                            <a href="{{ route('admin.activites.edit', ['id' => $activite->id]) }}">
                                Modifier une activité
                            </a>
                        </button>
                        {{-- SUPPRESSION --}}
                        <form action="{{ route('admin.activites.destroy') }}" method="POST">
                            @csrf

                            <input type="hidden" name="id" value="{{ $actualite->id }}">
                            <button type="submit">

                                Supprimer l'activité

                            </button>
                        </form>

                    </div>
                </div>
            </div>



        </article>
    @endforeach
</x-layout>
