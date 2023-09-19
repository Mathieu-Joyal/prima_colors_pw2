<x-layout titre="Les actualités">

    <x-nav />
    {{-- <x-hero/> --}}
    <main id="app">


        <section class="conteneur-actualites">
            <h1>ActualitÉs</h1>
            <div class="conteneur-bordure">
                <div class="bordure"></div>
                <div class="titre">
                    <h2>Nouveauté de la scène 2023</h2>
                </div>
            </div>


            @foreach ($actualitesRecentes as $actualite)
                <article class="conteneur-articles-actualites">

                    <div class="conteneur-gauche">

                        <div class="date-publication">
                            <h4> {{ $actualite->date_publication }}</h4>
                        </div>

                        <div class="conteneur-titre">
                            <div class="titre">
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


            {{-- <x-ban_concours/> --}}

            <section class="conteneur-actualites">

                <div class="conteneur-bordure">
                    <div class="bordure"></div>
                    <div class="titre">
                        <h2> la scène 2022</h2>
                    </div>
                </div>

                @foreach ($actualitesAnciennes as $actualite)
                <article class="conteneur-articles-actualites">

                    <div class="conteneur-gauche">

                        <div class="date-publication">
                            <h4> {{ $actualite->date_publication }}</h4>
                        </div>

                        <div class="conteneur-titre">
                            <div class="titre">
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
