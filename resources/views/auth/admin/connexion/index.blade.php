<x-layout titre="Connectez-vous">

    <h2>Connectez-vous</h2>

    <div class="conteneur_connexion">

        <section class="employe">

            <h2>Section employé</h2>

            <div style="text-align: center">
                <x-forms.erreur champ="erreur_connexion" />
            </div>

            <form class="administration" action="{{ route('admin.connexion.authentifier') }}"
                    method="POST"
            >
                @csrf

                <div>
                    <label for="email">
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
                    <label for="password">
                        Mot de passe
                    </label>

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
                    <button type="submit">
                        Connectez-vous!
                    </button>
                </div>
            </form>
        </section>
    </div>

</x-layout-admin>
