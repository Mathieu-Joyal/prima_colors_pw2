<x-layout titre="Festival Prima-Colors | Actualités">

    <x-header />



    <x-hero image="img\hero\hero-actualite.png"/>
        <h1>ActualitÉs</h1>
        <x-actualites.actualite :actualites="$actualitesRecentes" annee="3" />
        <x-ban_concours/>
        <x-actualites.actualite :actualites="$actualitesAnciennes" annee="2" />
        <x-ban_billet/>

    {{-- <script src="js/main.js" type="module"></script> --}}
    <x-footer />

</x-layout>
