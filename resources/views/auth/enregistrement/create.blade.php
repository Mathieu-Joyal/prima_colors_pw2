<x-layout titre="Enregistrez-vous">

    <x-header />

    <h2>Enregistrez-vous</h2>

    <div class="conteneur">

        <form action="{{ route('enregistrement.store') }}"
                method="POST"
                {{-- enctype="multipart/form-data" --}}
        >
            @csrf

            {{-- prénom --}}
            <div>
                <label for="prenom">
                    Prénom
                </label>

                <div>
                    <input
                        id="prenom"
                        name="prenom"
                        type="text"
                        autofocus
                        value="{{ old('prenom') }}"
                    >

                    <x-forms.erreur champ="prenom" />

                </div>
            </div>

            {{-- nom --}}
            <div>
                <label for="nom">
                    Nom
                </label>

                <div>
                    <input
                        id="nom"
                        name="nom"
                        type="text"
                        value="{{ old('nom') }}"
                    >

                    <x-forms.erreur champ="nom" />

                </div>

            </div>

            {{-- courriel --}}
            <div>
                <label for="email">
                    Courriel
                </label>

                <div>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email') }}"
                    >

                    <x-forms.erreur champ="email" />

                </div>

            </div>

            {{-- ville --}}
            {{-- Pourrais-être intéressant API de toutes les villes, mais payant? --}}
            <div>
                <label for="ville">
                    Ville (facultatif)
                </label>

                <div>
                    <input
                        id="ville"
                        name="ville"
                        type="text"
                        value="{{ old('ville') }}"
                    >

                    <x-forms.erreur champ="ville" />

                </div>

            </div>

            {{-- age --}}
            <div>
                <label for="age">
                    Âge
                </label>

                <div>
                    <input
                        id="age"
                        name="age"
                        type="number"
                        min="18"
                        max="99"
                        value="{{ old('age') }}"
                    >

                    <x-forms.erreur champ="age" />

                </div>

            </div>

            {{-- mot de passe --}}
            <div>
                <div>
                    <label for="password">
                        Mot de passe
                    </label>
                </div>

                <div>
                    <input
                        id="password"
                        name="password"
                        type="password"
                    >

                    <x-forms.erreur champ="password" />

                </div>

            </div>

            {{-- confirmation du mot de passe --}}
            <div>
                <div>
                    <label for="confirm-password">
                        Confirmation du mot de passe
                    </label>
                </div>

                <div>
                    <input
                        id="confirm-password"
                        name="confirmation_password"
                        type="password"
                    >

                    <x-forms.erreur champ="confirmation_password" />

                </div>

            </div>

            <div>
                <button type="submit">
                    Créez votre compte!
                </button>
            </div>
        </form>

        <div>
            <p>
                <a href="{{ route('connexion.create') }}">
                    Déjà un membre?
                </a>
            </p>
        </div>
    </div>

    <x-footer />

</x-layout>
