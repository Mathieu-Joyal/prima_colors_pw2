<x-layout titre="Créez une activité">

    <div class="conteneur-titre-activites-admin">
        <h2>les activitÉs</h2>

            <button  href="/admin/activites/create">
                Ajouter une activité
            </button>

    </div>

    @foreach ($vendrediActivites as $key => $activite)
        <div class="activites-admin">

            <div class="conteneur-grid">

                <!-- Row 1 -->
                <div class="grid-item">
                    <h3 class="grid-title">Titre</h3>
                    <p>{{ $activite->titre }}</p>
                </div>

                <div class="grid-item">
                    <h3 class="grid-title">Date</h3>
                    <p>{{ $activite->date }}</p>
                </div>

                <div class="grid-item">
                    <h3 class="grid-title">Heure</h3>
                    <p>{{ $activite->heure }}</p>
                </div>


                <div class="grid-item">
                    <h3 class="grid-title">Endroit</h3>
                    <p>{{ $activite->endroit }}</p>
                </div>

            </div>

            <!-- Row 2 -->
            <div class="conteneur-grid">
                <div class="description">
                    <h3 class="grid-title">Description</h3>
                    <p>{{ $activite->description }}</p>
                    <p>{{ $activite->description }}</p>
                    <p>{{ $activite->description }}</p>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="conteneur-grid">

                <div class="image">
                    <h3 class="grid-title">Image</h3>
                    <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite">
                </div>

            </div>

            <div class="conteneur-btn">

                {{-- MODIFICATION --}}
                    <button href="{{ route('admin.activites.edit', ['id' => $activite->id]) }}">
                        Modifier l'activité
                    </button>

                {{-- SUPPRESSION --}}

                    <button name="id" value="{{ $activite->id }}"type="submit" action="{{ route('admin.activites.destroy') }}" method="POST">
                        Supprimer l'activité
                    </button>
            </div>

            <hr>
        </div>

    @endforeach

    @foreach ($samediActivites as $key => $activite)
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

                <input type="hidden" name="id" value="{{ $activite->id }}">
                <button type="submit">

                    Supprimer l'activité

                </button>
            </form>

        </div>
        </div>
        </div>



        </article>
    @endforeach
    @foreach ($dimancheActivites as $key => $activite)
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

                <input type="hidden" name="id" value="{{ $activite->id }}">
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
