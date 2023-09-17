<x-layout titre="Les actualités">

    <x-nav />
    {{-- <x-hero/> --}}
    <main>



        <section class="conteneur-actualites">
            <h1>Actualités</h1>
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
                                <p>{{ $actualite->description }}</p>
                            </div>

                        </div>
                    </div>

                    <div class="conteneur-image">
                        {{-- <img class="thumbnail" src="{{ $actualite->image }}" alt="image de l'actualite"> --}}
                        <img class="thumbnail" src="{{ asset('img\images\pexels-alex-nasto-582635.jpg') }}"
                            alt="">
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
                                <p>{{ $actualite->description }}</p>
                            </div>

                        </div>
                    </div>

                    <div class="conteneur-image">
                        {{-- <img class="thumbnail" src="{{ $actualite->image }}" alt="image de l'actualite"> --}}
                        <img class="thumbnail" src="{{ asset('img\images\pexels-alex-nasto-582635.jpg') }}"
                            alt="">
                    </div>

                </article>
                @endforeach
            </section>

            {{-- <x-ban_billet/> --}}
    </main>
    <x-footer />

</x-layout>
