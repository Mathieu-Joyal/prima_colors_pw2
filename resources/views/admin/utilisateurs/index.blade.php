<x-layout titre="Bienvenue!">

    <x-header />

    <x-alertes.succes cle="succes" />

    <div class="conteneur">

        <section class="affichage-employes">

            <h3>AFFICHAGE DE LA LISTE DES UTILISATEURS</h3>

                {{-- <div class="conteneur-grid">

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

                </div> --}}

                    <a href="{{ route('admin.utilisateurs.edit', ['id' => 1]) }}">
                        <span>
                            Modifier l'utilisateur
                        </span>
                    </a>
                    <a href="{{ route('admin.utilisateurs.destroy', ['id' => 1]) }}">
                        <span>
                            Supprimer l'utilisateur
                        </span>
                    </a>
        </section>






    </div>

    <x-footer />

</x-layout>
