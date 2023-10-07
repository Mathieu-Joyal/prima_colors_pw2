<x-layout titre="Festival Prima-Colors | Activites">

    <x-hero image="img\hero\hero-activite.png" />

    <h1>activitÉs</h1>

    <x-activites.jour :activites="$vendrediActivites" journee="vendredi" id="vendredi" />

    <x-bannieres.concours :url="url('img/concours/mouth.png')" />

    <x-activites.jour :activites="$samediActivites" journee="samedi" id="samedi" />

    <x-bannieres.compte :url="url('img/activites/ban_chalkface.jpg')"/>

    <x-activites.jour :activites="$dimancheActivites" journee="dimanche" id="dimanche" />

    <x-bannieres.billet />

</x-layout>
