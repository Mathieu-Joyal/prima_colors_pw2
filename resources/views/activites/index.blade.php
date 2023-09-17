<x-layout titre="Les activites">


    <x-nav />
    {{-- <x-hero/> --}}

    <main>
        <section class="conteneur-activites">
            <h1>activites</h1>

            <div class="conteneur-date">

                <div class="conteneur-jours">
                    <h2 class="selected">Vendredi</h2>
                    <h2>Samedi</h2>
                    <h2>Dimanche</h2>
                </div>

                <div class="conteneur-bordure">
                    <div class="bordure"></div>
                    <div class="titre">
                        <h2>2023 | 10 | 13</h2>
                    </div>
                </div>
            </div>

            @foreach ($vendrediActivites as $activite)
                <article class="activites vendredi">

                    <div class="conteneur-image">
                        {{-- <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite"> --}}
                        <img class="thumbnail" src="{{asset('img\images\pexels-alex-nasto-582635.jpg')}}" alt="">
                    </div>


                    <div class="conteneur-titre">

                        <div class="heure">
                            <p class="heure">heure bbbbbbbcccccbbbbbb{{ $activite->heure }}</p>
                        </div>

                        <div class="titre">
                            <p> titre {{ $activite->titre }}</p>
                        </div>

                        <div class="endroit">
                            <p>endroit {{ $activite->endroit }}</p>
                        </div>

                        <div class="description">
                            <p> description {{ $activite->description }}</p>

                        </div>
                </article>
            @endforeach
            <button class="voir">Voir plus</button>

        </section>
        {{-- <x-ban_concours /> --}}
        <section class="conteneur-activites">
            <div class="conteneur-date">

                <div class="conteneur-jours">
                    <h2 >Vendredi</h2>
                    <h2 class="selected">Samedi</h2>
                    <h2>Dimanche</h2>
                </div>

                <div class="conteneur-bordure">
                    <div class="bordure"></div>
                    <div class="titre">
                        <h2>2023 | 10 | 13</h2>
                    </div>
                </div>
            </div>
            @foreach ($samediActivites as $activite)
                <article class="activites samedi">

                    <div class="conteneur-image">
                        {{-- <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite"> --}}
                        <img class="thumbnail" src="{{asset('img\images\pexels-alex-nasto-582635.jpg')}}" alt="">
                    </div>


                    <div class="conteneur-titre">

                        <div class="heure">
                            <p class="heure">heure {{ $activite->heure }}</p>
                        </div>

                        <div class="titre">
                            <p> titre {{ $activite->titre }}</p>
                        </div>

                        <div class="endroit">
                            <p>endroit {{ $activite->endroit }}</p>
                        </div>

                        <div class="description">
                            <p> description {{ $activite->description }}</p>

                        </div>
                </article>
            @endforeach
            <button class="voir">Voir plus</button>

        </section>

        {{-- <x-ban_compte /> --}}

        <section class="conteneur-activites">
            <div class="conteneur-date">

                <div class="conteneur-jours">
                    <h2 >Vendredi</h2>
                    <h2>Samedi</h2>
                    <h2 class="selected">Dimanche</h2>
                </div>

                <div class="conteneur-bordure">
                    <div class="bordure"></div>
                    <div class="titre">
                        <h2>2023 | 10 | 13</h2>
                    </div>
                </div>
            </div>
            @foreach ($dimancheActivites as $activite)
                <article class="activites dimanche">

                    <div class="conteneur-image">
                        {{-- <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite"> --}}
                        <img class="thumbnail" src="{{asset('img\images\pexels-alex-nasto-582635.jpg')}}" alt="">
                    </div>


                    <div class="conteneur-titre">

                        <div class="heure">
                            <p class="heure">heure {{ $activite->heure }}</p>
                        </div>

                        <div class="titre">
                            <p> titre {{ $activite->titre }}</p>
                        </div>

                        <div class="endroit">
                            <p>endroit {{ $activite->endroit }}</p>
                        </div>

                        <div class="description">
                            <p> description {{ $activite->description }}</p>

                        </div>
                </article>
            @endforeach
            <button class="voir">Voir plus</button>

        </section>
        {{-- <x-ban_billet /> --}}

    </main>

    <x-footer />

</x-layout>
