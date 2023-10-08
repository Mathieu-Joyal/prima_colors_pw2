<x-layout titre="Modifier {{ $un_employe->prenom }} {{ $un_employe->nom }} ">

    <x-nav-admin
        titre="Les employés"
        route="{{ route('admin.employes.index') }}"
        valeur="Retour aux employes"
    />

    <div class="conteneur conteneur_employe_edit">

        <form class="administration"
                action="{{ route('admin.employes.update', ['id' => $un_employe->id ]) }}"
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
                        value="{{ $un_employe->prenom }}"
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
                        value="{{ $un_employe->nom }}"
                    >
                </div>
                <x-forms.erreur champ="nom" />
            </div>

            <div>
                <label for="identifiant">
                    Identifiant
                </label>

                <div>
                    <input
                        id="identifiant"
                        name="identifiant"
                        type="text"
                        value="{{ $un_employe->identifiant }}"
                    >
                </div>
                <x-forms.erreur champ="identifiant" />
            </div>

            <div>
                <select
                    name="roles"
                    id="roles"
                >
                    @foreach ($roles as $role)

                        <option value="{{ $role->id }}"

                            @if ($un_employe->role_id === $role->id)

                                selected
                            @endif>

                            {{ $role->nom }}
                        </option>
                    @endforeach
                </select>
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
                    Modifier le compte employé
                </button>
            </div>
        </form>
    </div>

</x-layout-admin>
