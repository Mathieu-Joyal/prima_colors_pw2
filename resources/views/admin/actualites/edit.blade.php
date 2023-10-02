<x-layout titre="Modifiez une actualité">

    <x-nav-admin titre=" Modifier une ActualitÉs" route="{{route('admin.actualites.index')}}"
        valeur="Retour aux actualitÉs" />

    {{-- MESSAGES --}}
    {{-- @if (session('echec'))
            <p class="">
                {{ session('echec') }}</p>
        @endif --}}

    <section>

        {{-- FORMULAIRE --}}
        <form class="edit actualite" action="{{ route('admin.actualites.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            {{-- TITRE --}}
            <div class="grid-item titre actualite">
                <label for="titre" class="grid-title">Titre</label>


                <x-forms.erreur champ="titre" />

                <input id="titre" name="titre" type="text" autofocus class=" "
                    value="{{ old('titre') ?? $actualite->titre }}">
            </div>

            {{-- DÉSCRIPTION --}}
            <div class="grid-item description">

                <label for="description" class="grid-title">Déscription</label>

                <x-forms.erreur champ="description" />
                <input id="description" name="description" type="text" autofocus class=" "
                    value="{{ old('description') ?? $actualite->description }}">
            </div>

            {{-- IMAGE --}}
            <div class="grid-item image">

                <label for="image" class="grid-title">Image</label>

                <x-forms.erreur champ="image" />
                <input id="image" name="image" type="file" class=" "
                    value="{{ old('image') ?? $actualite->image }}">
            </div>

            <div class="conteneur-bouttons">
                {{-- SUBMIT --}}
                <button class="modifier" type="submit">
                    Modifier une activitÉ
                </button>
            </div>
        </form>
    </section>
</x-layout>
