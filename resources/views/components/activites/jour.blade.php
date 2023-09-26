@props(["activites", "journee", "id"])

<section class="conteneur-activites">


    <div class="conteneur-date">

        <div class="conteneur-jours">

            <a href="#vendredi">
                <h2 @class(["selected" => $journee == "vendredi"])> Vendredi</h2>
            </a>

            <a href="#samedi">
                <h2 @class(["selected" => $journee == "samedi"])>Samedi</h2>
            </a>

            <a href="#dimanche">
                <h2 @class(["selected" => $journee == "dimanche"])> Dimanche</h2>
            </a>

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

    @foreach ($activites as $key => $activite)
        <article class="activites vendredi  {{ $key >= 3 ? 'hidden' : '' }} " id={{$id}}>

            <div class="conteneur-image" onclick="toggleDescription(this)">
                <img class="thumbnail" src="{{ $activite->image }}" alt="image de l'activite">
                {{-- <img class="thumbnail" src="{{ asset('img\activites\cereals.png') }}" alt=""
                    loading="lazy"> --}}

                <div class="description">
                    <p>{{ $activite->description }}</p>
                    <p>{{ $activite->description }}</p>
                    <p>{{ $activite->description }}</p>
                    <p>{{ $activite->description }}</p>
                    <p>{{ $activite->description }}</p>
                    <p>{{ $activite->description }}</p>

                    <div class="fermer">
                        <p>X</p>
                    </div>
                </div>
            </div>

            <div class="conteneur-titre">

                <div class="heure">
                    <p class="heure"> {{ $activite->heure }}</p>
                </div>

                <div class="titre">
                    <p> {{ $activite->titre }}</p>
                </div>

                <div class="endroit">
                    <p> {{ $activite->endroit }}</p>
                </div>
            </div>
        </article>
    @endforeach
    <button class="voir activite" onclick="voirPlus(this)">Voir plus</button>

</section>
