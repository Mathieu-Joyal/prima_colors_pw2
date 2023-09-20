<x-layout titre="Créez une actualité">
    <div class="">
        <header class="">

            <h2 class="">Créez une actualité
                </h2>
        </header>

        {{-- MESSAGES --}}
        {{-- @if (session('echec'))
            <p class="">
                {{ session('echec') }}</p>
        @endif --}}

        <div class="">
            {{-- FORMULAIRE --}}
            <form class="" action="{{ route('admin.actualites.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    {{-- TITRE --}}
                    <label for="titre" class="">Titre</label>
                    <div class="">

                        <x-forms.erreur champ="titre" />

                        <input id="titre" name="titre" type="text" autofocus
                            class=" " value="{{ old('titre') }}">
                    </div>
                </div>

                <div>
                    {{-- DÉSCRIPTION --}}
                    <label for="description" class="">Déscription</label>
                    <div>
                        <x-forms.erreur champ="description" />
                        <input id="description" name="description" type="text" autofocus
                            class=" " value="{{ old('description') }}">
                    </div>
                </div>

                <div>
                    {{-- IMAGE --}}
                    <label for="image" class="">Image</label>
                    <div>
                        <x-forms.erreur champ="image" />
                        <input id="image" name="image" type="file"
                            class=" " value="{{ old('image') }}">
                    </div>
                </div>

                {{-- SUBMIT --}}
                <div>
                    <input type="submit"
                        class=""
                        value="Ajouter!">
                </div>
            </form>

            {{-- LIEN RETOUR --}}
            {{-- <p class="mt-10 text-center text-sm text-gray-500">
                <a href="{{ route('actualites.index') }}" class="hover:text-indigo-600">Retour aux notes</a>
            </p> --}}

            {{-- affiche la liste des actualités --}}

            @foreach ($actualitesRecentes as $actualite)
                <article class="conteneur-articles-actualites">

                    <div class="conteneur-gauche">

                        <div class="date-publication">
                            <h4> {{ $actualite->date_publication }}</h4>
                        </div>

                        <div class="conteneur-titre">
                            <div class="titre-actualite">
                                <h3>{{ $actualite->titre }}</h3>
                            </div>

                            <div class="description">
                                <p class="voir-moins">{{ $actualite->description }}
                                    <span class="dots">...</span>
                                    <span class="plus">{{ $actualite->description }} </span>
                                </p>
                            </div>

                            <div class="conteneur-btn-voir">
                                <button onclick="voirPlus(this)" class="voir-plus">
                                    Voir plus
                                </button>
                                <img class="arrow-image" src="{{ asset('img\arrow-jaune.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="conteneur-image">
                        <img class="thumbnail" src="{{ $actualite->image }}" alt="image de l'actualite">
                        {{-- <img class="thumbnail" src="{{ asset('img\actualites\1.png') }}"
                            alt=""> --}}
                    </div>

                </article>
            @endforeach
        </div>
    </div>

</x-layout>
