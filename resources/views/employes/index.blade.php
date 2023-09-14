<x-layout titre="Bienvenue!">

    <x-header />

    {{-- <x-alertes.succes cle="succes" /> --}}

    <div class="deconnexion">
        {{-- Pourrait être une composante? --}}

        {{-- <form action="{{ route('deconnexion') }}" method="POST">
            @csrf
            <input type="submit" value="Déconnexion">
        </form> --}}

    </div>

    <h2>Lâche pas la patate Mathieu du futur!</h2>


    <x-footer />

</x-layout>
