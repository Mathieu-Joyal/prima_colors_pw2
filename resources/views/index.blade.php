<x-layout titre="Festival Prima-Colors | Accueil">
        <x-nav />
        {{-- <video src=""></video> --}
        --}}
        <blockquote>
           Super cool festival blablabla
        </blockquote>

        <p>le festival est blabla</p>

        <div class="section_activites">or
            <img src="img/accueil/activites.jpg" alt="">
            <h3>Activités hautes en couleurs!</h3>
            <p> description activités</p>
            {{-- <a href="{{ route('activites.index') }}">Voir les activités!</a> --}}
        </div> 

        <div class="section_forfaits">
            <img src="img/accueil/forfaits.jpg" alt="">
            <h3>Vivez Prima-Colors sous toutes ses teintes !</h3>
            <p> description forfaits</p>
            {{-- <a href="{{ route('forfait.index') }}">Voir les forfaits!</a> --}}
        </div>

        {{-- <x-ban_concours></x-ban_concours> --}}


        <div class="section_actualités">
            <h3>Actualités de nos éditions antérieurs</h3>
            {{-- <a href="{{ route('actualité.index') }}"></a><button>actualité 1</button>
            <a href="{{ route('actualité.index') }}"></a><button>actualité 2</button>
            <a href="{{ route('actualité.index') }}"></a><button>actualité 3</button> --}}
        </div>

        {{-- <x-ban_compte></x-ban_compte> --}}
        {{-- <x-ban_billet></x-ban_billet> --}}
        <x-footer></x-footer>
   
</x-layout>
