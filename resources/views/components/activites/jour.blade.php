@props(["activites", "journee", "id"])

<section class="conteneur-activites">


    <div class="conteneur-date">

        <div class="conteneur-jours">

            <a href="#vendredi" @class(["selected" => $journee == "vendredi"]) >
                <h2 @class(["selected" => $journee == "vendredi"])> Vendredi</h2>
            </a>

            <a href="#samedi" @class(["selected" => $journee == "samedi"])>
                <h2 @class(["selected" => $journee == "samedi"])>Samedi</h2>
            </a>

            <a href="#dimanche" @class(["selected" => $journee == "dimanche"])>
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
                <img class="image-activite" src="{{asset ($activite->image) }}" alt="image de l'activite">

                <div class="description">
                    <p>{{ $activite->description }}</p>
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
        const buttonText = button.innerText;
        const parentSection = button.closest('section');

        const articles = parentSection.querySelectorAll('.activites');

        articles.forEach(function(article) {
            article.classList.toggle('hidden');
        });

        button.innerText = buttonText === 'VOIR PLUS' ? 'VOIR MOINS' : 'VOIR PLUS';
    }


    //show description on click
    function toggleDescription(element) {
        const description = element.querySelector('.description');
        const nextElement = element.parentElement.nextElementSibling;

        if (description && nextElement) {
            if (description.style.display === 'none' || description.style.display === '') {
                description.style.display = 'block';
                nextElement.style.marginTop = description.clientHeight + 'px';
            } else {
                description.style.display = 'none';
                nextElement.style.marginTop = '0';
            }
        }
    }
  // // Toggle for the last article
    // const lastArticle = document.querySelector('.conteneur-activites article:last-of-type');
    // const lastElement = lastArticle.nextElementSibling;

    // if (lastArticle && lastElement) {
    //     if (lastArticle.style.display === 'none' || lastArticle.style.display === '') {
    //         lastArticle.style.display = 'block';
    //         lastElement.style.marginTop = lastArticle.clientHeight + 'px';
    //     } else {
    //         lastArticle.style.display = 'none';
    //         lastElement.style.marginTop = '0';
    //     }
    // }
</script>

