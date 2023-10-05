<x-layout titre="Festival Prima-Colors | Accueil">
    <x-header />


    <div class="video-container">
        <video muted autoplay>
            <source src="../video\prima-colors_video_low.mp4" type="video/mp4">
            Votre navigateur ne prend pas en charge la lecture vidéo.
        </video>
    </div>

    <x-bannieres.countdown class="grand" />
    <blockquote>
        <span class="material-icons">format_quote</span>
        Prima-Colors : L'art, la musique, et la couleur fusionnent en une <br> explosion de créativité pour une
        expérience inoubliable!
        <span class="material-icons">format_quote</span>
    </blockquote>

    <div class="intro">
        <p>
            Entrez dans un univers de créativité et de couleurs au festival Prima-Color ! Vous êtes convié à une
            expérience artistique extraordinaire où l'art, la musique et la joie de vivre se mêlent pour créer des
            moments inoubliables. Au cœur du festival, découvrez une mosaïque éblouissante d'artistes talentueux, de
            spectacles visuels envoûtants et de musiques enivrantes. Laissez-vous emporter par l'ambiance vibrante et
            festive qui règne à chaque coin de rue. Que vous soyez un amateur d'art, un mélomane passionné ou simplement
            en quête de sensations fortes, Prima-Color vous promet une journée inoubliable. Venez en famille, entre amis
            ou en solo et plongez dans un monde de découvertes et d'émerveillement.
        </p>
        <p>
            Préparez-vous à vivre des émotions fortes et rejoignez-nous au festival Prima-Color pour une célébration
            artistique comme aucune autre. Nous avons hâte de partager ce moment unique avec vous !
        </p>
    </div>

    <div class="section_activites element-to-animate">
        <img src="../img/accueil/activite_accueil.png" alt="" class="img_activite">
        <div class="texte_droite">
            <h3 class="accueil_activite">Activités hautes en couleurs!</h3>
            <p class="accueil_activite">Plongez dans un monde coloré lors du festival. Plusieurs nouveautés se sont
                rajoutées pour notre édition de 2023.</p>
            <a href="/activites" class="accueil">Voir les activités! <span class="material-icons">east</span></a>
        </div>
    </div>

    <div class="section_forfaits element-to-animate">
        <div class="texte_gauche">
            <h3 class="accueil_forfait">Vivez Prima-Colors sous toutes ses teintes !</h3>
            <p class="accueil_forfait">Profitez pleinement du festival grâce à nos forfaits sur mesure. Invitez vos amis
                pour une expérience des plus colorée.</p>
            <a href="/forfaits" class="accueil_forfait">Voir les forfaits! <span class="material-icons">east</span></a>
        </div>
        <img src="../img/accueil/forfait_accueil.png" alt="" class="img_forfait">
    </div>

    <div class="section_apropos element-to-animate">
        <img src="../img/accueil/apropos_accueil.png" alt="" class="img_apropos">
        <div class="texte_droite">
            <h3 class="accueil_apropos">Qu'est-ce que Prima-Colors?</h3>
            <p class="accueil_apropos">Apprenez pour qui et en quoi consiste le festival. Rajoutez une touche de joie
                colorée dans votre vie en nous connaissant.</p>
            <a href="/apropos" class="accueil">Découvrez le festival! <span class="material-icons">east</span></a>
        </div>
    </div>


    <x-bannieres.concours :url="url('img/accueil/ban_concours.png')" />

    <section class="section_actualites">
        <h1 class="accueil_actualite">Actualités de nos éditions antérieures</h1>
        <article class="titre_actualite">
            @foreach ($actualites as $actualite)
                <a href="/actualites" class="vers_actualite">
                    <span>{{ $actualite->titre }}</span>
                    <img src="../{{ $actualite->image }}" alt="{{ $actualite->titre }}">
                </a>
            @endforeach

        </article>

        <div class="images">
            <div class="image"></div>
        </div>
    </section>

    <x-bannieres.compte :url="url('img/accueil/ban_compte.png')" />
    <x-bannieres.billet />
    <x-footer />

</x-layout>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const options = {
                threshold: 0.2
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add(
                        'animate'); 
                        observer.unobserve(entry
                        .target); 
                    }
                });
            }, options);

            const elementsToAnimate = document.querySelectorAll(
            '.element-to-animate'); 

            elementsToAnimate.forEach(element => {
                observer.observe(element);
            });
        });
</script>
