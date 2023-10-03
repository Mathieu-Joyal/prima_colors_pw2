<x-layout titre="Les activites">


    <x-header />

    <x-hero image="img\hero\hero-activite.png" />

    <h1>activitÉs</h1>

    <x-activites.jour :activites="$vendrediActivites" journee="vendredi" id="vendredi" />

    <x-bannieres.concours />

    <x-activites.jour :activites="$samediActivites" journee="samedi" id="samedi" />

    <x-bannieres.compte />

    <x-activites.jour :activites="$dimancheActivites" journee="dimanche" id="dimanche" />

    <x-bannieres.billet />

    <x-footer />


</x-layout>
