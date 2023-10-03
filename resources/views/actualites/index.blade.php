<x-layout titre="Les actualités">

    <x-header />



    <x-hero image="img\hero\hero-actualite.png"/>
        <h1>ActualitÉs</h1>
        <x-actualites.actualite :actualites="$actualitesRecentes" annee="3" />

        <x-banniere.concours/>

        <x-actualites.actualite :actualites="$actualitesAnciennes" annee="2" />

        <x-banniere.billet/>


    <x-footer />

</x-layout>
