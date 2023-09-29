<x-layout titre="Créez une activité">

    <x-nav-admin titre="Les ActivitÉs" route="{{ route('admin.activites.index') }}" valeur="Retour aux activitÉs" />

    <section class="formulaire_recherche activite">

        <form class="administration la_recherche" action="{{ route('admin.activites.filter') }}" method="GET">
            @csrf


            <div class="conteneur-recherche">
                <label for="recherche">
                    <p class="activite">Recherche par date:</p>

                </label>
                <select id="date" name="date">
                    <option value="2023-10-13">2023-10-13</option>
                    <option value="2023-10-14">2023-10-14</option>
                    <option value="2023-10-15">2023-10-15</option>
                </select>
            </div>

            {{-- <x-forms.erreur champ="user_recherche" /> --}}
            <div class="conteneur-bouton">
                <button class="recherche activite" type="submit">
                    Faire la recherche
                </button>
            </div>
        </form>
    </section>


    <section>
        @if (isset($filter) && $filter->count() > 0)
            @foreach ($filter as $key => $activite)
                <article class="conteneur-titre-activites-admin">
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
                        <div class="conteneur-image">
                            <h3 class="titre">Image</h3>
                            <div class="image">
                                <img class="" src="{{ asset($activite->image) }}" alt="image de l'activite">
                            </div>
                        </div>
                    </div>

                </article>

                <x-boutons.gestion_activites_actualites routeAjouter="{{ route('admin.activites.create') }}"
                    routeModifier="{{ route('admin.activites.edit', ['id' => $activite->id]) }}"
                    routeSupprimer="{{ route('admin.activites.destroy') }}" valeur="{{ $activite->id }}"
                    nom="activité" />
            @endforeach
        @else
            <p>No activities found for the selected date.</p>
        @endif
    </section>


</x-layout>
