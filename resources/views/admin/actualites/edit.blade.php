<x-layout-admin titre="Modifier {{ $actualite->titre }}">

    <x-nav-admin titre=" Modifier une ActualitÉs" route="{{ route('admin.actualites.index') }}"
        valeur="Retour aux actualitÉs" />

    <section>

        {{-- FORMULAIRE --}}
        <form class="edit actualite" action="{{ route('admin.actualites.update', ['id' => $actualite->id]) }}"
            method="POST" enctype="multipart/form-data">
            @csrf

            {{-- TITRE --}}
            <div class="grid-item titre actualite">
                <label for="titre" class="grid-title">Titre</label>


                <x-forms.erreur champ="titre" />

                <input id="titre" name="titre" type="text" autofocus class=" "
                    value="{{ old('titre') ?? $actualite->titre }}">
            </div>

            {{-- DESCRIPTION --}}
            <div class="grid-item description">

                <label for="description" class="grid-title">Description</label>

                <x-forms.erreur champ="description" />
                <input id="description" name="description" type="text" autofocus class=" "
                    value="{{ old('description') ?? $actualite->description }}">
            </div>

            {{-- IMAGE --}}
            <div class="grid-item image">

                <div class="conteneur-input-image">
                    <label for="image" class="grid-title">Image</label>
                    <p class="notice">Seul les fichiers PNG, JPG et JPEG sont acceptés</p>
                    <x-forms.erreur champ="image" />
                    <input id="image" name="image" type="file" class=" ">
                </div>

                <div class="conteneur-image edit">
                    <img src="{{ asset($actualite->image) }}" alt="">
                </div>
            </div>

            {{-- SUBMIT --}}
            <div class="conteneur-bouttons">

                <button class="modifier" type="submit">
                    Modifier l'actualité
                    <span class="edit">
                        ✐
                    </span>
                </button>
            </div>
        </form>
    </section>

</x-layout-admin>
