<x-layout titre="Festival Prima-Colors | Actualités">

    <x-hero image="img\hero\hero-actualite.png"/>
        <h1>ActualitÉs</h1>
        <x-actualites.actualite :actualites="$actualitesRecentes" annee="3" />

        <x-bannieres.concours :url="url('img/concours/pink-wood.jpg')" />

        <x-actualites.actualite :actualites="$actualitesAnciennes" annee="2" />

        <x-bannieres.billet/>

</x-layout>
