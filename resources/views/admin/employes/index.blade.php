<x-layout titre="Bienvenue!">

    <x-header />

    <x-alertes.succes cle="succes" />

    <x-boutons.deconnexion />

    <div class="conteneur">

        <x-boutons.creation
            route="{{ route('admin.employes.create') }}"
            valeur="Création d'un employé"
        />

        <section class="affichage-employes">
            <h3>AFFICHAGE DE LA LISTE DES EMPLOYÉS</h3>
                    <a href="{{ route('admin.employes.edit', ['id' => 1]) }}">
                        <span>
                            Modifier l'employé
                        </span>
                    </a>
                    <a href="{{ route('admin.employes.destroy', ['id' => 1]) }}">
                        <span>
                            Supprimer l'employé
                        </span>
                    </a>
        </section>
        </div>
    </div>

    <x-footer />

</x-layout>
