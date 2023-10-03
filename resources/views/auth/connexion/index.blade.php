<x-layout titre="Connectez-vous">

    <x-header />

    <h2>Connectez-vous</h2>

    {{-- @if(session('email'))
        <p>{{ session('email') }}</p>
    @endif --}}

    <div class="conteneur_connexion">

        <section class="utilisateur">

            <h2>Section utilisateur</h2>

            <form class="administration" action="{{ route('connexion.authentifier') }}"
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

            <div class="connexion_conteneur_membre">

                <a href="{{ route('enregistrement.create') }}">
                    Pas un membre?
                </a>
            </div>
        </section>
    </div>

    <x-footer />

</x-layout>
