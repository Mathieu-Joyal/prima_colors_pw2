<x-layout titre="employes">

<div class="banniere_accueil">
    <img src="{{ asset('img/activites/cereals.png') }}" alt="">
</div>

    <h2>Bonjour {{ $un_employe->prenom }} {{ $un_employe->nom }}!</h2>

    <div class="conteneur_accueil">

        <a href="{{ route('admin.employes.index') }}">Gestion des employée</a>
        <a href="{{ route('admin.utilisateurs.index') }}">Gestion des utilisateurs</a>
        <a href="{{ route('admin.actualites.index') }}">Gestion des actualités</a>
        <a href="{{ route('admin.activites.index') }}">Gestion des activités</a>
    </div>

    <div class="deconnexion">
        <form action="{{ route('admin.deconnexion') }}"
                method="POST"
        >
            @csrf

            <input type="submit" value="Déconnexion">
        </form>
    </div>

</x-layout>
