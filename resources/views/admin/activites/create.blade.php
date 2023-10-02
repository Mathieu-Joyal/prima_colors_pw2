<x-layout titre="Créez une activité">

    <x-nav-admin titre=" Ajouter une ActivitÉs" route="{{route('admin.activités.index')}}" valeur="Retour aux activitÉs" />


    {{-- MESSAGES --}}
    {{-- @if (session('echec'))
            <p class="">
                {{ session('echec') }}</p>
        @endif --}}
    <section>

        {{-- FORMULAIRE --}}
        <form class="create" action="{{ route('admin.activites.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="conteneur-grid">

                <!-- Titre -->
                <div class="grid-item">

                    <label for="titre" class="grid-title">Titre</label>

                    <x-forms.erreur champ="titre" />

                    <input id="titre" name="titre" type="text" autofocus class=" "
                        value="{{ old('titre') }}">
                </div>

                <!-- Date -->
                <div class="grid-item">
                    <label for="date" class="grid-title">Date</label>
                    <x-forms.erreur champ="date" />
                    <input id="date" name="date" type="date" min="2023-10-01" max="2023-10-31" autofocus class=" "
                        value="{{ old('date') }}">
                </div>

                <script>
                    //Selected dates
                    document.addEventListener('DOMContentLoaded', function() {
                        const dateInput = document.getElementById('date');

                        // Define the range of allowed dates
                        const startDate = new Date('2023-10-13');
                        const endDate = new Date('2023-10-15');

                        // Convert dates to string format YYYY-MM-DD
                        const startDateString = startDate.toISOString().split('T')[0];
                        const endDateString = endDate.toISOString().split('T')[0];

                        dateInput.setAttribute('min', startDateString);
                        dateInput.setAttribute('max', endDateString);
                    });
                </script>

                <!-- Heure -->
                <div class="grid-item">
                    <label for="heure" class="grid-title">Heure</label>
                    <x-forms.erreur champ="heure" />
                    <input id="heure" name="heure" type="time" autofocus class=" "
                        value="{{ old('heure') }}">
                </div>
                <!-- Endroit -->

                <div class="grid-item">
                    <label for="endroit" class="grid-title">Endroit</label>
                    <x-forms.erreur champ="endroit" />
                    <select id="endroit" name="endroit">
                        <option value="Groove Gallery">Groove Gallery</option>
                        <option value="Urban Beats Arena">Urban Beats Arena</option>
                        <option value="Graffiti Groove Stage">Graffiti Groove Stage</option>
                        <option value="ColorSplash Sound Hub">ColorSplash Sound Hub</option>
                        <option value="Artistic Beats Pavilion">Artistic Beats Pavilion</option>
                        <option value="Street Art Soundstage">Street Art Soundstage</option>
                        <option value="Vibrant Vibes Arena">Vibrant Vibes Arena</option>
                        <option value="Funky Graffiti Groove">Funky Graffiti Groove</option>
                        <option value="The Creative Rhythm Zone">The Creative Rhythm Zone</option>
                        <option value="Epic Urban Art Beats">Epic Urban Art Beats</option>
                    </select>
                </div>
            </div>

            <!-- Description -->
            <div class=" grid-item description">
                <label for="description" class="grid-title">Description</label>
                <x-forms.erreur champ="description" />
                <input id="description" name="description" type="text" autofocus class=" "
                    value="{{ old('description') }}">
            </div>

            <!-- Image -->
            <div class=" grid-item image">
                <label for="image" class="grid-title">Image</label>

                <x-forms.erreur champ="image" />
                <input id="image" name="image" type="file" class=" " value="{{ 'image' }}">
            </div>
            <div class="conteneur-bouttons">
                {{-- SUBMIT --}}
                <button class="ajouter" type="submit">
                    Ajouter une activitÉ
                </button>

            </div>
        </form>
        </div>

    </section>
</x-layout>
