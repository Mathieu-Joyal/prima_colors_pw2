<x-layout titre="Créez une activité">

    <div class="conteneur-titre-activites-admin">
        <h2>les activitÉs</h2>

        <button class="ajouter-activite">
            <a href="/admin/activites/create"> Ajouter une activité</a>
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
                    <h3 class="grid-title">Image</h3>
                    <div class="image">
                        <img class="" src="{{ asset($activite->image) }}" alt="image de l'activite">
                    </div>
            </div>

            <!-- Row 4 -->

                <div class="conteneur-btn">

                    {{-- MODIFICATION --}}
                    <button class="modifier-activite">
                        <a href="{{ route('admin.activites.edit', ['id' => $activite->id]) }}">Modifier l'activité</a>
                    </button>

                    {{-- SUPPRESSION --}}

                    <form>
                        @csrf

                        <input type="hidden" name="id" value="{{ $activite->id }}"
                            action="{{ route('admin.activites.destroy') }}" method="POST">
                        <button class="supprimer-activite" type="submit">

                            Supprimer l'activité

                        </button>
                    </form>

                </div>


            <hr>
        </div>
    @endforeach

</x-layout>
