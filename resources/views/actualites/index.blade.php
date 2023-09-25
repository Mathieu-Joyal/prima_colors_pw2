<x-layout titre="Les actualités">

    <x-nav />
    {{-- <x-hero/> --}}
    <main id="app">

        <h1>ActualitÉs</h1>
        <x-actualites.actualite :actualites="$actualitesRecentes" annee="3" />
        {{-- <x-ban_concours/> --}}
        <x-actualites.actualite :actualites="$actualitesAnciennes" annee="2" />
        {{-- <x-ban_billet/> --}}

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
    </script>


    {{-- <script src="js/main.js" type="module"></script> --}}
    <x-footer />

</x-layout>
