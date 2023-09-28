<x-layout titre="Modifiez une actualité">

    <x-nav-admin titre=" Modifier une ActualitÉs" route="route('admin.actualites.index')" valeur="Retour aux actualitÉs" />
    <div class="actualites-admin">


        {{-- MESSAGES --}}
        {{-- @if (session('echec'))
            <p class="">
                {{ session('echec') }}</p>
        @endif --}}

        <div class="form">
            {{-- FORMULAIRE --}}
            <form class="" action="{{ route('admin.actualites.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf


                <div class="conteneur-grid">
                    {{-- TITRE --}}
                    <div class="grid-item">
                        <label for="titre" class="grid-title">Titre</label>


                        <x-forms.erreur champ="titre" />

                        <input id="titre" name="titre" type="text" autofocus class=" "
                            value="{{ old('titre') ?? $actualite->titre }}">

                    </div>
                    {{-- DÉSCRIPTION --}}
                    <div  class="grid-item description">

                        <label for="description" class="grid-title">Déscription</label>

                            <x-forms.erreur champ="description" />
                            <input id="description" name="description" type="text" autofocus class=" "
                                value="{{ old('description') ?? $actualite->description }}">

                    </div>
                    {{-- IMAGE --}}
                    <div  class="grid-item">

                        <label for="image" class="grid-title">Image</label>

                            <x-forms.erreur champ="image" />
                            <input id="image" name="image" type="file" class=" "
                                value="{{ old('image') ?? $actualite->image }}">

                    </div>

                    <div class="">
                        {{-- SUBMIT --}}
                        <button class="ajouter" type="submit">
                            Ajouter une activitÉ
                        </button>


                    </div>
            </form>
        </div>
    </div>

</x-layout>
