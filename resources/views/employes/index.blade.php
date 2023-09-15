<x-layout titre="Bienvenue!">

    <x-header />

    {{-- <x-alertes.succes cle="succes" /> --}}

    <div class="deconnexion">
        {{-- Pourrait être une composante? --}}

        {{-- <form action="{{ route('deconnexion') }}" method="POST">
            @csrf
            <input type="submit" value="Déconnexion">
        </form> --}}

    </div>

    <div class="conteneur">

        <h3>Création d'un nouvel employé</h3>

        <form action="{{ route('enregistrement.storeEmploye') }}"
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
    </div>


    <x-footer />

</x-layout>
