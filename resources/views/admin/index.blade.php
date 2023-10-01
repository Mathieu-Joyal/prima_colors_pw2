<x-layout titre="employes">

    <div class="banniere_accueil">
        <img src="{{ asset('img/activites/cereals.png') }}" alt="céréales">
    </div>

    <x-alertes.succes cle="succes" />

    <x-boutons.deconnexion
        routeDeconnexion="{{ route('admin.deconnexion') }}"
    />


    <h2>Bonjour {{ $un_employe->prenom }} {{ $un_employe->nom }}!</h2>

    <div class="conteneur_accueil">

        <a href="{{ route('admin.employes.index') }}">Gestion des employés</a>
        <a href="{{ route('admin.utilisateurs.index') }}">Gestion des utilisateurs</a>
        <a href="{{ route('admin.actualites.index') }}">Gestion des actualités</a>
        <a href="{{ route('admin.activites.index') }}">Gestion des activités</a>
        <a href="{{ route('admin.reservations.index') }}">Gestion des réservations</a>
    </div>

    {{-- class petit ou grand --}}
    {{-- <x-bannieres.countdown class="petit" /> --}}

</x-layout>



