<x-layout titre="Connectez-vous">

    <x-header />

    <h2>Connectez-vous</h2>

    {{-- @if(session('email'))
        <p>{{ session('email') }}</p>
    @endif --}}

    <div class="conteneur">

        <section class="utilisateur">

            <h2>Section utilisateur</h2>

            <form action="{{ route('connexion.authentifierUser') }}"
                    method="POST"
            >
                @csrf

                <div>
                    <label for="email">
                        Courriel Utilisateur
                    </label>

                    <div>
                        <input
                        id="email"
                        name="email"
                        type="email"
                        autocomplete="email"
                        value="{{ old('email') }}"
                        >
                    </div>
                    <x-forms.erreur champ="email" />
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
                        autocomplete="current-password"
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

            <div>
                <p>
                    <a href="{{ route('enregistrement.create') }}">
                        Pas un membre?
                    </a>
                </p>
            </div>
        </section>

        <section class="employe">

            <h2>Section employé</h2>

            <form action="{{ route('connexion.authentifierEmploye') }}"
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

    <x-footer />

</x-layout>
