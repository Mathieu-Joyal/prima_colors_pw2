<div class="nav">
    <a href="/connexion" class="connexion">Connexion
        <span class="material-icons">
            person_outline
        </span>
    </a>
    <div class="contenu_nav ">
        <img src="{{ asset('img/logo/logo-header.svg') }}" alt="" class="logo-nav">

        <div class="menu_nav">
            <a href="{{ route ('accueil') }}" class="item_nav menu-item">
                <div class="nav">Accueil</div>
            </a>
            <a href="{{ route ('activites.index') }}" class="item_nav menu-item">
                <div class="nav">Activités</div>
            </a>
            <a href="{{ route ('concours.index') }}" class="item_nav menu-item">
                <div class="nav">Concours</div>
            </a>
            <a href="{{ route ('apropos.index') }}" class="item_nav menu-item">
                <div class="nav">À&nbsp;Propos</div>
            </a>
            <a href="{{ route ('actualites.index') }}" class="item_nav menu-item">
                <div class="nav">Actualités</div>
            </a>
        </div>

        <a href="{{ route ('forfaits.index') }}" class="billet">
            <p class="texte">Billets</p>
        </a>

        <div class="reseau">
            <a href="https://www.facebook.com/profile.php?id=61552009479006" target="_blank">
                <img src="{{ asset('img/reseau/facebook/f_logo_RGB-Black_58.png') }}" alt="logo facebook" class="reseau-img">
            </a>
            <a href="https://www.instagram.com/festival_prima_colors/" target="_blank">
                <img src="{{ asset('img/reseau/instagram/Instagram_Glyph_Black.png') }}" alt="logo instagram" class="reseau-img">
            </a>
            <a href="https://youtu.be/9KYyMd28mzQ" target="_blank">
                <img src="{{ asset('img/reseau/youtube/okyoutube_social_icon_dark.png') }}"  alt="logo youtube" class="reseau-img">
            </a>
        </div>

        <a class="hamburger">
            <span class="menuIcon material-icons">menu</span>
        </a>

    </div>

    <div class="bg">
        <div class="background"></div>
        <div class="ligne_rose"></div>
    </div>
</div>

<section class="menu">
    <img src="img/logo/logo-header.svg" alt="" class="logo-nav">
    <ul>
        <li><a class="menuItem" href="/">Accueil</a></li>
        <li><a class="menuItem" href="/activites">Activités</a></li>
        <li><a class="menuItem" href="/concours">Concours</a></li>
        <li><a class="menuItem" href="/actualites">Actualités</a></li>
        <li><a class="menuItem" href="/actualites">La billeterie</a></li>
        <li><a class="menuItem" href="/apropos">À Propos</a></li>
    </ul>
    <a class="hamburger">
        <span class="closeIcon material-icons">close</span>
    </a>
</section>

<script>
    //MENU HAMBURGER
    document.addEventListener('DOMContentLoaded', function() {
        const menuIcon = document.querySelector('.menuIcon');
        const closeIcon = document.querySelector('.closeIcon');
        const menu = document.querySelector('.menu');

        menuIcon.addEventListener('click', function() {
            menu.style.display = 'block';
        });

        closeIcon.addEventListener('click', function() {
            menu.style.display = 'none';
        });
    });
</script>
