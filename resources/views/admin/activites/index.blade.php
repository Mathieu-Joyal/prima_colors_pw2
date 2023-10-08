<x-layout titre="Liste des activités">

    <x-nav-admin
        titre="Les ActivitÉs"
        route="{{ route('admin.activites.index') }}"
        valeur="Retour aux activitÉs"
    />

    <x-alertes cle="succes" class="alerte_succes"/>
    <x-alertes cle="erreur" class="alerte_erreur"/>

    <section class="formulaire_recherche activite">

        <form class="administration la_recherche" action="{{ route('admin.activites.filter') }}" method="GET">

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

            <div class="conteneur-bouton">
                <button class="recherche activite" type="submit">
                    Faire la recherche
                </button>
            </div>
        </form>
        <div class="bouton_liste_complete">

            <x-boutons.liste_complete
                route="{{ route('admin.actualites.index') }}"
                valeur="actualites"
            />

        </div>
    </section>


    <section>
        @forelse ($activites as $key =>$activite)

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

                @if ( auth()->guard('employe')->user()->role_id === 1)

                    <x-boutons.gestion_activites_actualites routeAjouter="{{ route('admin.activites.create') }}"
                        routeModifier="{{ route('admin.activites.edit', ['id' => $activite->id]) }}"
                        routeSupprimer="{{ route('admin.activites.destroy') }}" valeur="{{ $activite->id }}"
                        nom="activité" />
                @endif
            @empty

            <p>Aucune activité trouvé pour cette date</p>

        @endforelse
    </section>

</x-layout-admin>
