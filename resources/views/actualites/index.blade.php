<x-layout titre="Les actualités">

    <x-nav />
    {{-- <x-hero/> --}}
    <main id="app">


        <section class="conteneur-actualites">
            <h1>ActualitÉs</h1>
            <div class="conteneur-bordure">
                <div class="bordure actualites"></div>
                <div class="titre 2023">
                    <h2>
                        <span style="--delay: 0.1s">N</span><span style="--delay: 0.2s">o</span><span style="--delay: 0.3s">u</span><span style="--delay: 0.4s">v</span><span style="--delay: 0.5s">e</span><span style="--delay: 0.6s">a</span><span style="--delay: 0.7s">u</span><span style="--delay: 0.8s">t</span><span style="--delay: 0.9s">é</span>
                        <span style="--delay: 1s"> </span><span style="--delay: 1.1s">d</span><span style="--delay: 1.2s">e</span>
                        <span style="--delay: 1.3s"> </span><span style="--delay: 1.4s">l</span><span style="--delay: 1.5s">a</span>
                        <span style="--delay: 1.6s"> </span><span style="--delay: 1.7s">s</span><span style="--delay: 1.8s">c</span><span style="--delay: 1.9s">è</span><span style="--delay: 2s">n</span><span style="--delay: 2.1s">e</span>
                        <span style="--delay: 2.2s"> </span><span style="--delay: 2.3s">2</span><span style="--delay: 2.4s">0</span><span style="--delay: 2.5s">2</span><span style="--delay: 2.6s">3</span>
                    </h2>
                </div>

            </div>

            @foreach ($actualitesRecentes as $actualite)
                <article class="conteneur-articles-actualites">

                    <div class="conteneur-gauche">

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
                        {{-- <img class="thumbnail" src="{{ asset('img\actualites\1.png') }}"
                            alt=""> --}}
                    </div>

                </article>
            @endforeach

        </section>
            {{-- <x-ban_concours/> --}}

            <section class="conteneur-actualites">

                <div class="conteneur-bordure">
                    <div class="bordure"></div>
                    <div class="titre 2022">
                        <h2>
                            <span style="--delay: 0.6s">N</span><span style="--delay: 0.7s">o</span><span style="--delay: 0.8s">u</span><span style="--delay: 0.9s">v</span><span style="--delay: 1s">e</span><span style="--delay: 1.1s">a</span><span style="--delay: 1.2s">u</span><span style="--delay: 1.3s">t</span><span style="--delay: 1.4s">é</span>
                            <span style="--delay: 1.5s"> </span><span style="--delay: 1.6s">d</span><span style="--delay: 1.7s">e</span>
                            <span style="--delay: 1.8s"> </span><span style="--delay: 1.9s">l</span><span style="--delay: 2s">a</span>
                            <span style="--delay: 2.1s"> </span><span style="--delay: 2.2s">s</span><span style="--delay: 2.3s">c</span><span style="--delay: 2.4s">è</span><span style="--delay: 2.5s">n</span><span style="--delay: 2.6s">e</span>
                            <span style="--delay: 2.7s"> </span><span style="--delay: 2.8s">2</span><span style="--delay: 2.9s">0</span><span style="--delay: 3s">2</span><span style="--delay: 3.1s">3</span>
                        </h2>

                    </div>

                </div>

                @foreach ($actualitesAnciennes as $actualite)
                <article class="conteneur-articles-actualites">

                    <div class="conteneur-gauche">

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
                        {{-- <img class="thumbnail" src="{{ asset('img\actualites\1.png') }}"
                            alt=""> --}}
                    </div>

                </article>
                @endforeach
            </section>

            {{-- <x-ban_billet/> --}}
    </main>
    <script>
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
    {{-- <script src="js/main.js" type="module"></script> --}}
    <x-footer />

</x-layout>
