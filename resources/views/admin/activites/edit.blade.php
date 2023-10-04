<x-layout titre="Modifiez une activité">

    <x-nav-admin titre=" Modifier une ActivitÉ" route="{{route('admin.activites.index')}}" valeur="Retour aux activitÉs" />

    <section>

        {{-- FORMULAIRE --}}
        {{-- ******************* Ajout pour recevoir l'id ******************** --}}
        <form class="edit" action="{{ route('admin.activites.update', ['id' => $activite->id] ) }}" method="POST" enctype="multipart/form-data">
            @csrf
        {{-- ******************************** --}}

            <div class="conteneur-grid">
                <!-- Titre -->
                <div class="grid-item">
                    <label for="titre" class="grid-title">Titre</label>
                    <input id="titre" name="titre" type="text" autofocus class=" "
                    value="{{ old('titre') ?? $activite->titre }}">

                    <x-forms.erreur champ="titre" />
                </div>

                <!-- Date -->
                <div class="grid-item">
                    <label for="date" class="grid-title">Date</label>
                    <input id="date" name="date" type="date" autofocus class=" "
                    value="{{ old('date') ?? $activite->date }}">

                    <x-forms.erreur champ="date" />
                </div>

                <!-- Heure -->
                <div class="grid-item">
                    <label for="heure" class="grid-title">Heure</label>
                    <input id="heure" name="heure" type="time" autofocus class=" "
                    value="{{ old('heure') ?? $activite->heure }}">

                    <x-forms.erreur champ="heure" />
                </div>

                <!-- Endroit -->
                <div class="grid-item">
                    <label for="endroit" class="grid-title">Endroit</label>

                    <select id="endroit" name="endroit">
                        <option value="Groove Gallery"@if ($activite->endroit == 'Groove Gallery') selected @endif>Groove Gallery
                        </option>
                        <option value="Urban Beats Arena"@if ($activite->endroit == 'Urban Beats Arena') selected @endif>Urban Beats
                            Arena</option>
                        <option value="Graffiti Groove Stage"@if ($activite->endroit == 'Graffiti Groove Stage') selected @endif>Graffiti
                            Groove Stage</option>
                        <option value="ColorSplash Sound Hub"@if ($activite->endroit == 'ColorSplash Sound Hub') selected @endif>
                            ColorSplash Sound Hub</option>
                        <option value="Artistic Beats Pavilion"@if ($activite->endroit == 'Artistic Beats Pavilion') selected @endif>
                            Artistic Beats Pavilion</option>
                        <option value="Street Art Soundstage"@if ($activite->endroit == 'Street Art Soundstage') selected @endif>Street
                            Art Soundstage</option>
                        <option value="Vibrant Vibes Arena"@if ($activite->endroit == 'Vibrant Vibes Arena') selected @endif>Vibrant
                            Vibes Arena</option>
                        <option value="Funky Graffiti Groove"@if ($activite->endroit == 'Funky Graffiti Groove') selected @endif>Funky
                            Graffiti Groove</option>
                        <option value="The Creative Rhythm Zone"@if ($activite->endroit == 'The Creative Rhythm Zone') selected @endif>The
                            Creative Rhythm Zone</option>
                        <option value="Epic Urban Art Beats"@if ($activite->endroit == 'Epic Urban Art Beats') selected @endif>Epic Urban
                            Art Beats</option>
                    </select>

                    <x-forms.erreur champ="endroit" />
                </div>
            </div>

            <!-- Description -->
            <div class=" grid-item description">
                <label for="description" class="grid-title">Description</label>
                <input id="description" name="description" type="text" autofocus class=" "
                value="{{ old('description') ?? $activite->description }}">

                <x-forms.erreur champ="description" />
            </div>

            <!-- Image -->
            <div class=" grid-item image">
                <label for="image" class="grid-title">Image</label>

                <input id="image" name="image" type="file" class=" "
                value="{{ $activite->image }}">

                <x-forms.erreur champ="image" />
            </div>

            <div class="conteneur-bouttons">
                {{-- SUBMIT --}}
                <button class="modifier" type="submit">
                    Modifier l'activitÉ
                </button>
            </div>
        </form>
    </section>

    <script>
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
</x-layout>
