<x-layout titre="Modification de l'utilisateur {{ $user->prenom }} {{ $user->nom }} ">

    <x-header />

    <x-boutons.accueil_admin />

    <div class="conteneur">

        <form class="formulaire_un_utilisateur"
                action="{{ route('admin.utilisateurs.update', ['id' => $user->id ]) }}"
                method="POST"
        >
            @csrf

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
                        value="{{ $user->prenom }}"
                    >
                </div>
                <x-forms.erreur champ="prenom" />
            </div>

            <div>
                <label for="nom">
                    Nom
                </label>

                <div>
                    <input
                        id="nom"
                        name="nom"
                        type="text"
                        value="{{ $user->nom }}"
                    >
                </div>
                <x-forms.erreur champ="nom" />
            </div>

            <div>
                <label for="email">
                    Courriel
                </label>

                <div>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ $user->email }}"
                    >
                </div>
                <x-forms.erreur champ="email" />
            </div>

            <div>
                <label for="ville">
                    Ville (facultatif)
                </label>

                <div>
                    <input
                        id="ville"
                        name="ville"
                        type="text"
                        value="{{ $user->ville }}"
                    >
                </div>
                <x-forms.erreur champ="ville" />
            </div>

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
                        value="{{ $user->age }}"
                    >
                </div>
                <x-forms.erreur champ="age" />
            </div>

            <div class="modification_mdp">

                <p>Facultatif</p>

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
                    </div>
                    <x-forms.erreur champ="password" />
                </div>
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
                    </div>
                    <x-forms.erreur champ="confirmation_password" />
                </div>
            </div>

            <div>
                <button type="submit">
                    Modifiez le compte
                </button>
            </div>
        </form>

    </div>

    <x-footer />

</x-layout>
