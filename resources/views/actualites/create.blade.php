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
            <form class="" action="{{ route('actualites.store')}}" method="POST" enctype="multipart/form-data">
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
                    {{-- DATE PUBLICATION --}}
                    <label for="date_publication" class="">Date de publication</label>
                    <div>
                        <x-forms.erreur champ="date_publication" />
                        <input id="date_publication" name="date_publication" type="text" autofocus
                            class=" " value="{{ old('date_publication') }}">
                    </div>
                </div>
                <div>
                    {{-- IMAGE --}}
                    <label for="description" class="">Déscription</label>
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
            <p class="mt-10 text-center text-sm text-gray-500">
                <a href="{{ route('notes.index') }}" class="hover:text-indigo-600">Retour aux notes</a>
            </p>
        </div>
    </div>

</x-layout>
