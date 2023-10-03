<x-layout titre="Festival Prima-Colors | Accueil">
    <x-header />

    {{-- <video src=""></video> --}
        --}}

    <blockquote>
        <span class="material-icons">
            format_quote
        </span>Prima-Color : L'art, la musique, et la couleur fusionnent en <br> une explosion de créativité pour une
        expérience inoubliable!
        <span class="material-icons">
            format_quote
        </span>
    </blockquote>

    <p class="intro">Entrez dans un univers de créativité et de couleurs au festival Prima-Color ! <br> Vous êtes convié
        à une
        expérience
        artistique extraordinaire où l'art, la musique et la joie de vivre se mêlent pour créer des moments
        inoubliables.

        Au cœur du festival, découvrez une mosaïque éblouissante d'artistes talentueux, de spectacles visuels envoûtants
        et de musiques enivrantes. Laissez-vous emporter par l'ambiance vibrante et festive qui règne à chaque coin de
        rue.

        Que vous soyez un amateur d'art, un mélomane passionné ou simplement en quête de sensations fortes, Prima-Color
        vous promet une journée inoubliable. Venez en famille, entre amis ou en solo et plongez dans un monde de
        découvertes et d'émerveillement. <br>
    </p>
    <p class="intro">
        Préparez-vous à vivre des émotions fortes et rejoignez-nous au festival
        Prima-Color pour une célébration artistique comme aucune autre. <br>
        Nous avons hâte de partager ce moment unique
        avec vous !
    </p>

    <div class="section_activites">
        <img src="../img/accueil/activite_accueil.png" alt="" class="img_activite">
        <div class="texte_droite">
            <h3 class="accueil_activite">Activités hautes en couleurs!</h3>
            <p class="accueil_activite"> Plongez dans un monde coloré lors du festival. <br> Plusieurs nouveautés se
                sont rajoutés pour notre édition de 2023</p>
            <a href="/activites" class="accueil">Voir les activités! <span class="material-icons">
                    east
                </span></a>
        </div>
    </div>

    <div class="section_forfaits">
        <div class="texte_gauche">
            <h3 class="accueil_forfait">Vivez Prima-Colors sous toutes ses teintes !</h3>
            <p class="accueil_forfait"> Profitez pleinement du festival grâce à nos forfaits sur mesure <br>Invitez vos
                amis pour une expérience des plus colorée.</p>
            <a href="/forfaits" class="accueil">Voir les forfaits! <span class="material-icons">
                    east
                </span></a>
        </div>
        <img src="../img/accueil/forfait_accueil.png" alt=""class="img_forfait">
    </div>

    <div class="section_apropos">
        <img src="../img/accueil/apropos_accueil.png" alt="" class="img_apropos">
        <div class="texte_droite_deux">
            <h3 class="accueil_apropos">Qu'est ce que Prima-Colors?</h3>
            <p class="accueil_apropos">Apprenez pour qui et en quoi consiste le festival. <br> Rajoutez une touche de
                joie coloré dans votre vie en nous connaissant</p>
            <a href="/apropos" class="accueil">Découvrez le festival! <span class="material-icons">
                    east
                </span></a>
        </div>
    </div>

    <x-bannieres.concours :url="url('img/accueil/ban_concours.png')"/>


    <div class="section_actualites">
        <h1 class="accueil_actualite">ActualitÉs de nos Éditions antÉrieures</h1>
        <div class="titre_actualite">
            <a href="/actualites" class="vers_actualite">
                <span>Vibrations Urbaines 2</span>
                <img src="../img/actualites/1.png" alt="">
            </a>
            <a href="/actualites" class="vers_actualite">
                <span> Nouvelle Édition Explosive de "Vibrations Urbaines</span>
                <img src="../img/actualites/2.png" alt="">
            </a>
            <a href="/actualites" class="vers_actualite">
                <span>Ateliers Artistiques et Éducatifs</span>
                <img src="../img/actualites/3.png" alt="">
            </a>
            <a href="/actualites" class="vers_actualite">
                <span>Nos Artistes et Musiciens</span>
                <img src="../img/actualites/4.png" alt="">
            </a>
            <a href="/actualites" class="vers_actualite">
                <span>Artistes Internationaux Confirmés</span>
                <img src="../img/actualites/5.png" alt="">
            </a>
            <a href="/actualites" class="vers_actualite">
                <span>Innovation Technologique au Service de l'Art Urbain</span>
                <img src="../img/actualites/6.jpg" alt="">
            </a>
            <a href="/actualites" class="vers_actualite">
                <span>Événements Spéciaux en Soirée qui ont Enflammé la Nuit</span>
                <img src="../img/actualites/7.png" alt="">
            </a>
            <a href="/actualites" class="vers_actualite">
                <span>Fusion Culturelle Exceptionnelle</span>
                <img src="../img/actualites/8.png" alt="">
            </a>
            <a href="/actualites" class="vers_actualite">
                <span>Programme Musical</span>
                <img src="../img/actualites/9.png" alt="">
            </a>
        </div>
        <div class="images">
            <div class="image"></div>
        </div>
    </div>
    </div>


    <x-bannieres.compte />
    <x-bannieres.billet />

    <x-footer />


</x-layout>
