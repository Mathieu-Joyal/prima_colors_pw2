<x-layout titre="Les activites">


    <x-nav />
    {{-- <x-hero/> --}}

    <main>
        <h1>activitÉs</h1>
        <x-activites.jour :activites="$vendrediActivites" journee="vendredi" id="vendredi"/>
         {{-- <x-ban_concours /> --}}
        <x-activites.jour :activites="$samediActivites" journee="samedi" id="samedi"/>
         {{-- <x-ban_compte /> --}}
        <x-activites.jour :activites="$dimancheActivites" journee="dimanche" id="dimanche"/>
        {{-- <x-ban_billet /> --}}

    </main>

    <x-footer />

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


        // show description on click
        function toggleDescription(element) {
            const description = element.querySelector('.description');
            const nextElement = element.nextElementSibling;

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
    </script>

</x-layout>
