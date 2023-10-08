<x-layout-admin titre="Liste des actualités">


    <x-nav-admin titre="Les ActualitÉs" route="{{ route('admin.actualites.index') }}" valeur="Voir les actualitÉs" />

    <x-alertes cle="succes" class="alerte_succes" />
    <x-alertes cle="erreur" class="alerte_erreur" />


    <section class="formulaire_recherche actualite">

        {{-- FORMULAIRE --}}
        <form class="administration la_recherche" action="{{ route('admin.actualites.filter') }}" method="GET">

            <!-- Recherche -->
            <div class="conteneur-recherche">
                <label for="recherche">
                    <p class="actualite">Recherche par date:</p>

                </label>
                <select id="date_publication" name="date_publication">
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                </select>

            </div>

            <div class="conteneur-bouton">
                <button class="recherche actualite" type="submit">
                    Faire la recherche
                </button>
            </div>
        </form>
        <div class="bouton_liste_complete">

            <x-boutons.liste_complete route="{{ route('admin.actualites.index') }}" valeur="actualites" />

        </div>

    </section>

    <section>
        @forelse ($actualites as $actualite)
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

            @if (auth()->guard('employe')->user()->role_id === 1)
                <x-boutons.gestion_activites_actualites routeAjouter=" {{ route('admin.actualites.create') }}"
                    routeModifier=" {{ route('admin.actualites.edit', ['id' => $actualite->id]) }}"
                    routeSupprimer=" {{ route('admin.actualites.destroy') }}" valeur="{{ $actualite->id }}"
                    nom="actualité" />
            @endif
        @empty

            <p>Aucune activités trouvé pour la cette date</p>
        @endforelse
    </section>

    </x-layout-admin>
