<x-layout titre="employes">

    <a href="{{ route('admin.employes.index') }}">Gestion des employée</a>
    <a href="{{ route('admin.utilisateurs.index') }}">Gestion des utilisateurs</a>
    <a href="{{ route('admin.actualites.index') }}">Gestion des actualités</a>
    {{-- <a href="{{ route('activites.create') }}">Gestion de activités</a> --}}

    <div class="deconnexion">
        <form action="{{ route('admin.deconnexion') }}"
                method="POST"
        >
            @csrf

            <input type="submit" value="Déconnexion">
        </form>
    </div>

</x-layout>
