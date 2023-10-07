<x-layout titre="Festival Prima-Colors | Billetterie">

    <x-hero image="img\hero\hero-billeterie.png" />
    <h1 class="billetterie">La billetterie</h1>
    <section class="billetterie">


        @foreach ($forfaits as $forfait)
            <article class="conteneur-forfaits">

                <div class="conteneur-titre">
                    <div class="titre">
                        <h3>{{ $forfait->titre }}
                        </h3>
                    </div>
                    <div class="fleche">
                        <span class="material-icons" onclick="voirPlus(event)">
                            south
                        </span>
                    </div>

                </div>
                <div class="conteneur-description voir-plus">
                    <div class="conteneur-description-prix">
                        <div class="description">
                            <p>{{ $forfait->description }}</p>
                        </div>
                        <div class="prix">
                            <p>{{ $forfait->prix }}$
                            </p>
                        </div>
                    </div>
                    <x-boutons.reserver/>

                </div>
            </article>
        @endforeach

    </section>
    <x-bannieres.concours :url="url('img/concours/ours.jpg')" />
    <x-bannieres.compte :url="url('img/accueil/ban_compte.png')"/>

</x-layout>

<script>
    function voirPlus(event) {
        const description = event.target.closest('.conteneur-forfaits')
            .querySelector('.conteneur-description');
        description.classList.toggle('voir-plus');

        const titre = event.target.closest('.conteneur-titre');
        titre.classList.toggle('border-visible');
    }
</script>
