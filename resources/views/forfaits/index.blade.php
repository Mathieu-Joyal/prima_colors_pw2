<x-layout titre="La billetterie Prima-colors">

    <x-header/>
    <x-hero image="img\hero\hero-forfaits.png"/>
<section>
<h1>La billetterie</h1>

@foreach ($forfaits as $forfait)
<article class="conteneur-forfaits">
    <div class="forfait">
        <div class="titre">titre{{$forfait->titre}}</div>
        <div class="prix">{{$forfait->prix}}</div>
    </div>
    <div class="description">{{$forfait->description}}</div>

</article>
@endforeach
</section>
    <x-footer/>

</x-layout>
