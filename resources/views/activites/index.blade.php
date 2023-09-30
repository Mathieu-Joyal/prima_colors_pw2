<x-layout titre="Les activites">


    <x-header />



        <x-hero image="img\hero\hero-activite.png"/>
        <h1>activitÉs</h1>
        <x-activites.jour :activites="$vendrediActivites" journee="vendredi" id="vendredi"/>
         <x-ban_concours />
        <x-activites.jour :activites="$samediActivites" journee="samedi" id="samedi"/>
         <x-ban_compte />
        <x-activites.jour :activites="$dimancheActivites" journee="dimanche" id="dimanche"/>
        <x-ban_billet />



    <x-footer />


</x-layout>
