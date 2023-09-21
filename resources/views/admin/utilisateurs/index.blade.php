<x-layout titre="Bienvenue!">

    <x-header />

    <x-alertes.succes cle="succes" />

    <div class="conteneur">

        <section class="affichage-employes">

            <h3>AFFICHAGE DE LA LISTE DES UTILISATEURS</h3>

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
