<x-layout titre="employes">

    <div class="banniere_accueil">
        <img src="{{ asset('img/activites/cereals.png') }}" alt="céréales">
    </div>

    <x-alertes.succes cle="succes" />

    <x-boutons.deconnexion
        route="{{ route('admin.deconnexion') }}"
    />


    <h2>Bonjour {{ $un_employe->prenom }} {{ $un_employe->nom }}!</h2>

    <div class="conteneur_accueil">

        <a href="{{ route('admin.employes.index') }}">Gestion des employée</a>
        <a href="{{ route('admin.utilisateurs.index') }}">Gestion des utilisateurs</a>
        <a href="{{ route('admin.actualites.index') }}">Gestion des actualités</a>
        <a href="{{ route('admin.activites.index') }}">Gestion des activités</a>
        <a href="{{ route('admin.reservations.index') }}">Gestion des réservations</a>
    </div>

    <h2>ORIGINAL</h2>
    <x-bannieres.countdown />

    {{-- <h2>TEST 1 - Max-Width</h2>
    <x-bannieres.countdownun
        maximum="450"
    /> --}}

    {{-- <h2>TEST 2 - calc</h2>
    <x-bannieres.countdowndeux
        font="92"
    /> --}}

</x-layout>



