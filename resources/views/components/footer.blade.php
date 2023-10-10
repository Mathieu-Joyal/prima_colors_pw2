<div class="contenu">
    <div class="contenu_footer">

        <div class="menu_footer">
            <a href="{{ route('accueil') }}" class="item_footer">
                <div class="menu_footer">Accueil
                </div>
            </a>
            <a href="{{ route('forfaits.index') }}" class="item_footer">
                <div class="menu_footer">Billets
                </div>
            </a>
            <a href="{{ route('activites.index') }}" class="item_footer">
                <div class="menu_footer">Activités
                </div>
            </a>
            <a href="{{ route('concours.index') }}" class="item_footer">
                <div class="menu_footer">Concours
                </div>
            </a>
            <a href="{{ route('actualites.index') }}" class="item_footer">
                <div class="menu_footer">Actualités
                </div>
            </a>
            <a href="{{ route('apropos.index') }}" class="item_footer">
                <div class="menu_footer">À&nbsp;Propos
                </div>
            </a>
        </div>
    </div>

    <img src="{{ asset('img/logo/logo.png') }}" alt="logo festival" class="logo">

    <p class="slogan">Prima-Colors : L'Art de Vivre, Peint en Mille Couleurs !</p>

    <div class="info">
        <p class="adresse">Prima-Colors@info.ca</p>
        <p class="telephone">514-612-3636</p>
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


</div>
<div class="conteneur-copyright">
    <p class="copyright"> <span>&copy;</span> 2023 Festival Prima-Colors</p>
    <a href="/admin/connexion" class="connexion-admin">Administration</a>
</div>
