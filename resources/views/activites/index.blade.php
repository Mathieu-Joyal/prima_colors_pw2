<x-layout titre="Les activites">


    <x-nav />
    {{-- <x-hero/> --}}

    <main>
        <section class="conteneur-activites">
            <h1>activitÉs</h1>

            <div class="conteneur-date">

                <div class="conteneur-jours">
                    <h2 class="selected">Vendredi</h2>
                    <h2>Samedi</h2>
                    <h2>Dimanche</h2>
                </div>

                <div class="conteneur-bordure">
                    <div class="bordure activites"></div>
                    <div class="titre">
                        <h2>
                            <span style="animation-delay: 0.6s">2</span>
                            <span style="animation-delay: 0.8s">0</span>
                            <span style="animation-delay: 1s">2</span>
                            <span style="animation-delay: 1.2s">3</span>
                            <span style="animation-delay: 1.4s"> | </span>
                            <span style="animation-delay: 1.6s">1</span>
                            <span style="animation-delay: 1.8s">0</span>
                            <span style="animation-delay: 2s"> | </span>
                            <span style="animation-delay: 2.2s">1</span>
                            <span style="animation-delay: 2.4s">3</span>
                        </h2>
                    </div>
                </div>
            </div>

            @foreach ($vendrediActivites as $key => $activite)
                <article class="activites vendredi {{ $key >= 3 ? 'hidden' : '' }} ">

                    <div class="conteneur-image">
                        {{-- <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite"> --}}
                        <img class="thumbnail" src="{{ asset('img\activites\cereals.png') }}" alt=""
                            loading="lazy">

                        <div class="description">
                            <p> description {{ $activite->description }}</p>
                        </div>
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
                    </div>
                </article>
            @endforeach
            <button class="voir voir-plus" onclick="voirPlus(this)">Voir plus</button>

        </section>

        <script>
            //images glide onto page as we scroll
            document.addEventListener('DOMContentLoaded', function() {
                const observer = new IntersectionObserver(glide, {
                    threshold: 0.2
                });
                const activites = document.querySelectorAll('.activites');
                const images = document.querySelectorAll('.conteneur-image');

                function glide(articles) {
                    articles.forEach(function(article) {
                        if (article.isIntersecting) {
                            article.target.classList.add('visible');
                            observer.unobserve(article.target);
                        }
                    });
                }

                activites.forEach(function(activite) {
                    observer.observe(activite);
                });

                images.forEach(function(image) {
                    observer.observe(image);
                });
            });

            //see more / less @button click
            function voirPlus(button) {
                const articlesVendredi = document.querySelectorAll('.activites.vendredi');
                const articlesSamedi = document.querySelectorAll('.activites.samedi');
                const articlesDimanche = document.querySelectorAll('.activites.dimanche');

                articlesVendredi.forEach(function(article) {
                    article.classList.toggle('hidden');
                });

                articlesSamedi.forEach(function(article) {
                    article.classList.toggle('hidden');
                });

                articlesDimanche.forEach(function(article) {
                    article.classList.toggle('hidden');
                });

                const buttonText = button.innerText;
                button.innerText = buttonText === 'VOIR PLUS' ? 'VOIR MOINS' : 'VOIR PLUS';
            }
        </script>

        {{-- <x-ban_concours /> --}}
        <section class="conteneur-activites">
            <div class="conteneur-date">

                <div class="conteneur-jours">
                    <h2>Vendredi</h2>
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
            @foreach ($samediActivites as $key => $activite)
                <article class="activites samedi {{ $key >= 3 ? 'hidden' : '' }}">

                    <div class="conteneur-image">
                        {{-- <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite"> --}}
                        <img class="thumbnail" src="{{ asset('img\activites\costume-party.png') }}" alt=""
                            loading="lazy">
                        <div class="description">
                            <p> description {{ $activite->description }}</p>

                        </div>
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


                </article>
            @endforeach
            <button class="voir voir-plus" onclick="voirPlus(this)">Voir plus</button>
            {{-- <button class="voir hidden voir-moins">Voir moins</button> --}}
        </section>

        {{-- <x-ban_compte /> --}}

        <section class="conteneur-activites">
            <div class="conteneur-date">

                <div class="conteneur-jours">
                    <h2>Vendredi</h2>
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
            @foreach ($dimancheActivites as $key => $activite)
                <article class="activites dimanche {{ $key >= 3 ? 'hidden' : '' }}">

                    <div class="conteneur-image">
                        {{-- <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite"> --}}
                        <img class="thumbnail" src="{{ asset('img\activites\dj2.png') }}" alt=""
                            loading="lazy">
                        <div class="description">
                            <p> description {{ $activite->description }}</p>

                        </div>
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


                </article>
            @endforeach
            <button class="voir voir-plus" onclick="voirPlus(this)">Voir plus</button>
            {{-- <button class="voir hidden voir-moins">Voir moins</button> --}}

        </section>
        {{-- <x-ban_billet /> --}}

    </main>

    <x-footer />

</x-layout>
