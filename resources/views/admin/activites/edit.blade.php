<x-layout titre="Modifiez une activité">
    <div class="activites-admin">
        <header class="">

            <h2 class="">modifier une activité
            </h2>
        </header>

        {{-- MESSAGES --}}
        {{-- @if (session('echec'))
            <p class="">
                {{ session('echec') }}</p>
        @endif --}}

        <div class="form">
            {{-- FORMULAIRE --}}
            <form class="" action="{{ route('admin.activites.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="conteneur-grid">
                    <!-- Titre -->
                    <div class="grid-item">
                        <label for="titre" class="grid-title">Titre</label>
                        <x-forms.erreur champ="titre" />
                        <input id="titre" name="titre" type="text" autofocus class=" "
                            value="{{ old('titre') ?? $activite->titre }}">
                    </div>

                    <!-- Date -->
                    <div class="grid-item">
                        <label for="date" class="grid-title">Date</label>
                        <x-forms.erreur champ="date" />
                        <input id="date" name="date" type="text" autofocus class=" "
                            value="{{ old('date') ?? $activite->date }}">
                    </div>

                    <!-- Heure -->
                    <div class="grid-item">
                        <label for="heure" class="grid-title">Heure</label>
                        <x-forms.erreur champ="heure" />
                        <input id="heure" name="heure" type="text" autofocus class=" "
                            value="{{ old('heure') ?? $activite->heure }}">
                    </div>
                    <!-- Endroit -->
                    <div class="grid-item">
                        <label for="endroit" class="grid-title">Endroit</label>
                        <x-forms.erreur champ="endroit" />
                        <input id="endroit" name="endroit" type="text" autofocus class=" "
                            value="{{ old('endroit') ?? $activite->endroit }}">
                    </div>
                </div>


                <!-- Description -->
                <div class=" grid-item description">
                    <label for="description" class="grid-title">Description</label>
                    <x-forms.erreur champ="description" />
                    <input id="description" name="description" type="text" autofocus class=" "
                        value="{{ old('description') ?? $activite->description }}">
                </div>

                <!-- Image -->
                <div class=" grid-item">
                    <label for="image" class="grid-title">Image</label>

                    <x-forms.erreur champ="image" />
                    <input id="image" name="image" type="file" class=" "
                        value="{{ old('image') ?? $activite->image }}">
                </div>

                {{-- SUBMIT --}}
                <div class="btn-submit">
                    <input type="submit"  value="Modifier!">
                </div>
            </form>

            {{-- LIEN RETOUR --}}
            <p class="">
                <a href="{{ route('admin.activites.index') }}" class="">Retour aux activités</a>
            </p>

        </div>
    </div>

</x-layout>
