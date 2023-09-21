<x-layout titre="employes">
{{--
    <a href="{{ route('employes.create') }}">Gestion d'un employée</a>
    <a href="{{ route('employes.create') }}">Gestion d'un utilisateur</a> --}}
    <a href="{{ route('admin.actualites.index') }}">Gestion des actualités</a>
    {{-- <a href="{{ route('activites.create') }}">Gestion de activités</a> --}}
    <a href=""></a>

    <div class="deconnexion">
        <form action="{{ route('deconnexion.employe') }}"
                method="POST"
        >
            @csrf

            <input type="submit" value="Déconnexion">
        </form>
    </div>

</x-layout>
