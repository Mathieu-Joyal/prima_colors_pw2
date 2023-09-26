<x-layout titre="Les actualités">

    <x-nav />
    {{-- <x-hero/> --}}
    <main id="app">

        <h1>ActualitÉs</h1>
        <x-actualites.actualite :actualites="$actualitesRecentes" annee="3" />
        <x-ban_concours />
        <x-actualites.actualite :actualites="$actualitesAnciennes" annee="2" />
        <x-ban_billet />

    </main>
    <script>
        //BOUTTON VOIR PLUS
        function voirPlus(button) {
            const parent = button.parentElement.parentElement.parentElement;
            const dots = parent.querySelector(".dots");
            const plusText = parent.querySelector(".plus");
            const btnText = parent.querySelector(".voir-plus");

            if (dots.style.display === "none" || dots.style.display === "") {
                dots.style.display = "inline";
                btnText.innerHTML = "Voir plus";
                plusText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Voir moins";
                plusText.style.display = "inline";
            }
        }


        //glide onto page and trigger animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver(glide, {
                threshold: 0.2
            });
            const actualites = document.querySelectorAll('.conteneur-articles-actualites');
            const images = document.querySelectorAll('.conteneur-image');

            function glide(articles) {
                articles.forEach(function(article) {
                    if (article.isIntersecting) {
                        article.target.classList.add('slide-up', 'typingDescription');
                        observer.unobserve(article.target);
                    }
                });
            }

            actualites.forEach(function(actualite) {
                observer.observe(actualite);
            });

            images.forEach(function(image) {
                observer.observe(image);
            });
        });
    </script>


    {{-- <script src="js/main.js" type="module"></script> --}}
    <x-footer />

</x-layout>
