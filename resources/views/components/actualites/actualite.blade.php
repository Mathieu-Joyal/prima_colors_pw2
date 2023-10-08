@props(['actualites', 'annee'])

<section class="conteneur-actualites">

    <div class="conteneur-bordure">
        <div class="bordure actualites"></div>
        <div class="titre 2023">
            <h2>
                <span style="--delay: 0.1s">N</span><span style="--delay: 0.2s">o</span><span
                    style="--delay: 0.3s">u</span><span style="--delay: 0.4s">v</span><span
                    style="--delay: 0.5s">e</span><span style="--delay: 0.6s">a</span><span
                    style="--delay: 0.7s">u</span><span style="--delay: 0.8s">t</span><span
                    style="--delay: 0.9s">é</span>
                <span style="--delay: 1s"> </span><span style="--delay: 1.1s">d</span><span
                    style="--delay: 1.2s">e</span>
                <span style="--delay: 1.3s"> </span><span style="--delay: 1.4s">l</span><span
                    style="--delay: 1.5s">a</span>
                <span style="--delay: 1.6s"> </span><span style="--delay: 1.7s">s</span><span
                    style="--delay: 1.8s">c</span><span style="--delay: 1.9s">è</span><span
                    style="--delay: 2s">n</span><span style="--delay: 2.1s">e</span>
                <span style="--delay: 2.2s"> </span><span style="--delay: 2.3s">2</span><span
                    style="--delay: 2.4s">0</span><span style="--delay: 2.5s">2</span><span
                    style="--delay: 2.6s">{{ $annee }}</span>
            </h2>
        </div>
    </div>

    @foreach ($actualites as $actualite)
        <article class="conteneur-articles-actualites" id="{{ $actualite->id }}">

            <div class="conteneur-gauche ">

                <div class="date-publication">
                    <h4> {{ $actualite->date_publication }}</h4>
                </div>

                <div class="conteneur-titre">
                    <div class="titre-actualite">
                        <h3>{{ $actualite->titre }}</h3>
                    </div>

                    <div class="description">
                        <p class="voir-moins">{{ $actualite->description }}
                            <span class="dots">...</span>
                            <span class="plus">{{ $actualite->description }} </span>
                        </p>
                    </div>

                    <div class="conteneur-btn-voir">
                        <button onclick="voirPlus(this)" class="voir-plus">
                            Voir plus
                        </button>
                        <img class="arrow-image" src="{{ asset('img\arrow-jaune.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="conteneur-image">
                <img class="thumbnail" src="{{ $actualite->image }}" alt="image de l'actualite">

        </article>
    @endforeach

</section>



<script>
    //images slide up & text slides into page as we scroll
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver(glide, {
            threshold: 0.2
        });

        const images = document.querySelectorAll('.conteneur-image');
        const titres = document.querySelectorAll('.conteneur-gauche');

        function glide(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    if (entry.target.classList.contains('conteneur-image')) {
                        entry.target.classList.add('slide-up');
                    } else if (entry.target.classList.contains('conteneur-gauche')) {
                        entry.target.classList.add('slide-in');
                    }
                    observer.unobserve(entry.target);
                }
            });
        }

        titres.forEach(function(titres) {
            observer.observe(titres);
        });

        images.forEach(function(image) {
            observer.observe(image);
        });
    });


    //BOUTTON VOIR PLUS
    function voirPlus(button) {
        const parent = button.parentElement.parentElement.parentElement;
        const dots = parent.querySelector(".dots");
        const plusText = parent.querySelector(".plus");
        const btnText = parent.querySelector(".voir-plus");

        if (dots.style.display === "none" || dots.style.display === "") {
            dots.style.display = "inline";
            btnText.innerHTML = "Voir plus";
            plusText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Voir moins";
            plusText.style.display = "inline";
        }
    }
</script>



