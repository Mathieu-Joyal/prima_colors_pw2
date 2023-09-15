<x-layout titre="Les actualités">

    {{-- <x-nav /> --}}
    {{-- <x-hero/> --}}
    <main>
        <h1>Actualités</h1>


        <section class="conteneur-actualites">
            <div class="conteneur-bordure">
                <div class="bordure"></div>
                <div class="titre">
                    <h2>Nouveauté de la scène 2023</h2>
                </div>
            </div>

            @foreach ($actualitesRecentes as $actualite)
                <article class="conteneur-actualites">

                    <div class="date-publication">
                        <p> {{ $actualite->date_publication }}</p>
                    </div>

                    <div class="conteneur-une-actualite">

                        <div class="titre">
                            <p>{{ $actualite->titre }}</p>
                        </div>


                        <div class="description">
                            <p>{{ $actualite->description }}</p>
                        </div>
                    </div>

                    <div class="conteneur-image">
                        <img class="thumbnail" src="{{ $actualite->image }}" alt="image de l'actualite">
                    </div>

                </article>
            @endforeach

        {{-- <x-ban_concours/> --}}

        <section class="conteneur-actualites">

            <div class="conteneur-bordure">
                <div class="bordure"></div>
                <div class="titre">
                    <h2> la scène 2023</h2>
                </div>
            </div>

            @foreach ($actualitesAnciennes as $actualite)
                <article class="conteneur-actualites">

                    <div class="date-publication">
                        <p> {{ $actualite->date_publication }}</p>
                    </div>

                    <div class="conteneur-une-actualite">

                        <div class="titre">
                            <p>{{ $actualite->titre }}</p>
                        </div>


                        <div class="description">
                            <p>{{ $actualite->description }}</p>
                        </div>
                    </div>

                    <div class="conteneur-image">
                        <img class="thumbnail" src="{{ $actualite->image }}" alt="image de l'actualite">
                    </div>

                </article>

            @endforeach
        </section>

        {{-- <x-ban_billet/> --}}
    </main>
    <x-footer />

</x-layout>
