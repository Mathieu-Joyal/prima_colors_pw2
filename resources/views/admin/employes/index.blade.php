<x-layout titre="Bienvenue!">

    <x-header />

    <x-alertes.succes cle="succes" />

    <div class="conteneur">

        <div class="deconnexion">
            <form action="{{ route('admin.deconnexion') }}"
                    method="POST"
            >
                @csrf
                <input type="submit" value="Déconnexion">
            </form>
        </div>
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
