<x-layout titre="Créez une activité">
    <div class="">
        <header class="">

            <h2 class="">Créez une activité
                </h2>
        </header>

        {{-- MESSAGES --}}
        {{-- @if (session('echec'))
            <p class="">
                {{ session('echec') }}</p>
        @endif --}}

        <div class="">
            {{-- FORMULAIRE --}}
            <form class="" action="{{ route('admin.activites.store')}}" method="POST" enctype="multipart/form-data">
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
                    {{-- {{-- IMAGE --hello}} --}}
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
           <p class="">
            <a href="{{ route('admin.activites.index') }}" class="">Retour aux activités</a>
        </p>


        </div>
    </div>

</x-layout>