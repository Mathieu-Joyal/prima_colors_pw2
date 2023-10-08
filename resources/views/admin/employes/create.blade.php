<x-layout-admin titre="Créer un employé">

    <x-nav-admin titre="Les employés"
                    route="{{ route('admin.employes.index') }}"
                    valeur="Retour aux employes"
    />

    <div class="conteneur">

        <h2 class="h2_creation_employe">Créer un nouvel employé</h2>

        <section class="creation_employe">

            <form class="administration" action="{{ route('admin.enregistrement.store') }}"
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
                            value="{{ old('prenom') }}"
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
                            value="{{ old('nom') }}"
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
                            value="{{ old('identifiant') }}"
                        >
                    </div>
                    <x-forms.erreur champ="identifiant" />
                </div>
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
                            id="confirmation_password"
                            name="confirmation_password"
                            type="password"
                        >
                    </div>
                    <x-forms.erreur champ="confirmation_password" />
                </div>
                <select
                    name="roles"
                    id="roles"
                >
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->nom }}</option>
                    @endforeach
                </select>
                <div>
                    <button type="submit">
                        Créez le compte employé
                    </button>
                </div>
            </form>
        </section>

</x-layout-admin>
