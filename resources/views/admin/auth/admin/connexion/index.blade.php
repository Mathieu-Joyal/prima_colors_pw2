<x-layout titre="Connectez-vous!!!!!">

    <x-header />

    <h2>Connectez-vous</h2>

    {{-- @if(session('email'))
        <p>{{ session('email') }}</p>
    @endif --}}

    <div class="conteneur_connexion">

        <section class="employe">

            <h2>Section employé</h2>

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
                        {{-- autocomplete="current-password" --}}
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

    <x-footer-admin />

</x-layout>
