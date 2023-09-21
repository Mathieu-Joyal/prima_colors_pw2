<x-layout titre="Modifiez une actualité">
    <div class="">
        <header class="">

            <h2 class="">modifier une actualité
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
                            class=" " value="{{ old('titre') ?? $actualite->titre}}">
                    </div>
                </div>

                <div>
                    {{-- DÉSCRIPTION --}}
                    <label for="description" class="">Déscription</label>
                    <div>
                        <x-forms.erreur champ="description" />
                        <input id="description" name="description" type="text" autofocus
                            class=" " value="{{ old('description') ?? $actualite->description}}">
                    </div>
                </div>

                <div>
                      {{-- IMAGE --}}
                    <label for="image" class="">Image</label>
                    <div>
                        <x-forms.erreur champ="image" />
                        <input id="image" name="image" type="file"
                            class=" " value="{{ old('image') ?? $actualite->image}}">
                    </div>
                </div>

                {{-- SUBMIT --}}
                <div>
                    <input type="submit"
                        class=""
                        value="Modifier!">
                </div>
            </form>

            {{-- LIEN RETOUR --}}
            <p class="">
                <a href="{{ route('admin.actualites.index') }}" class="hover:text-indigo-600">Retour aux actualités</a>
            </p>



        </div>
    </div>

</x-layout>
