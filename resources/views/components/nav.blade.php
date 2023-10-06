<div class="nav">
    <a href="/connexion" class="connexion">Connexion
        <span class="material-icons">
            person_outline
        </span>
    </a>
    <div class="contenu_nav ">
        <img src="img/logo/logo-header.svg" alt="" class="logo-nav">

        <div class="menu_nav">
            <a href="/" class="item_nav menu-item">
                <div class="nav">Accueil
                </div>
            </a>
            <a href="/activites" class="item_nav menu-item">
                <div class="nav">Activités
                </div>
            </a>
            <a href="/concours" class="item_nav menu-item">
                <div class="nav">Concours
                </div>
            </a>
            <a href="/apropos" class="item_nav menu-item">
                <div class="nav">À&nbsp;Propos
                </div>
            </a>
            <a href="/actualites" class="item_nav menu-item">
                <div class="nav">Actualités
                </div>
            </a>
        </div>

        <a href="/forfaits" class="billet">
            <p class="texte">Billets</p>
        </a>

        <div class="reseau">
            <a href="https://www.facebook.com/">
                <img src="img/reseau/facebook/f_logo_RGB-Black_58.png" alt="" class="reseau-img">
            </a>
            <a href="https://www.instagram.com/">
                <img src="img/reseau/instagram/Instagram_Glyph_Black.png" alt="" class="reseau-img">
            </a>
            <a href="https://www.youtube.com/">
                <img src="img/reseau/youtube/okyoutube_social_icon_dark.png" alt="" class="reseau-img">
            </a>

        </div>

  <a class="hamburger">
                <span class="menuIcon material-icons">menu</span>
                <span class="closeIcon material-icons">close</span>
            </a>
    </div>

    <div class="bg">
        <div class="background"></div>
        <div class="ligne_rose"></div>
    </div>
</div>

<section class="menu">
    <img src="img/logo/logo-header.svg" alt="" class="logo-nav">
    <ul >
        <li><a class="menuItem" href="/">Accueil</a></li>
        <li><a class="menuItem" href="/activites">Concours</a></li>
        <li><a class="menuItem" href="/concours">About</a></li>
        <li><a class="menuItem" href="/apropos" >À Propos</a></li>
        <li><a class="menuItem" href="/actualites"  >Actualités</a></li>
      </ul>
</section>

<script>

const menu = document.querySelector(".menu");
const menuItems = document.querySelectorAll(".menuItem");
const hamburger= document.querySelector(".hamburger");
const closeIcon= document.querySelector(".closeIcon");
const menuIcon = document.querySelector(".menuIcon");

function toggleMenu() {
  if (menu.classList.contains("showMenu")) {
    menu.classList.remove("showMenu");
    closeIcon.style.display = "none";
    menuIcon.style.display = "block";
  } else {
    menu.classList.add("showMenu");
    closeIcon.style.display = "block";
    menuIcon.style.display = "none";
  }
}

hamburger.addEventListener("click", toggleMenu);

menuItems.forEach(
  function(menuItem) {
    menuItem.addEventListener("click", toggleMenu);
  }
)
</script>
