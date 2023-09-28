<x-layout titre="Créez une actualité">
    <div class="actualites-admin">

        <x-nav-admin titre=" Ajouter une ActualitÉs" route="route('admin.actualites.index')" valeur="Retour aux actualitÉs" />

        {{-- MESSAGES --}}
        {{-- @if (session('echec'))
            <p class="">
                {{ session('echec') }}</p>
        @endif --}}

        <div class="form">
            {{-- FORMULAIRE --}}
            <form class="create" action="{{ route('admin.actualites.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                <div class="conteneur-grid">

                    {{-- TITRE --}}
                    <div class="grid-item titre">

                        <label for="titre" class="grid-title">Titre</label>

                        <x-forms.erreur champ="titre" />

                        <input id="titre" name="titre" type="text" autofocus class=" "
                            value="{{ old('titre') }}">
                    </div>

                    {{-- DÉSCRIPTION --}}
                    <div class="grid-item description">

                        <label for="description" class="grid-title">Déscription</label>

                        <x-forms.erreur champ="description" />

                        <input id="description" name="description" type="text" autofocus class=" "
                            value="{{ old('description') }}">

                    </div>


                </div>
                {{-- {{-- IMAGE }} --}}
                    <div class="grid-item">

                        <label for="image" class="grid-title">Image</label>

                        <x-forms.erreur champ="image" />

                        <input id="image" name="image" type="file" class=" " value="{{ old('image') }}">
                    </div>


            <div class="conteneur-bouttons">
                {{-- SUBMIT --}}
                <button class="ajouter" type="submit">
                    Ajouter une activitÉ
                </button>

                {{-- LIEN RETOUR --}}
                <div class="boutton-retour">
                    <a href="{{ route('admin.activites.index') }}" class="">Retour aux actualitÉs</a>
                </div>
            </div>

            </form>




        </div>
    </div>

</x-layout>
