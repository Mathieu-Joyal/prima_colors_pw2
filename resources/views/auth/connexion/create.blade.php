<x-layout titre="Connectez-vous">

    <x-header />

    <h2>Connectez-vous</h2>

    {{-- @if(session('email'))
        <p>{{ session('email') }}</p>
    @endif --}}

    <div class="conteneur">

        <form action="{{ route('connexion.authentifier') }}" method="POST">
            @csrf

            <div>
                <label for="email">Courriel Utilisateur </label>

                {{-- <x-forms.erreur champ="email" /> --}}

                <div>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        autocomplete="email"
                        value="{{ old('email') }}"
                    >
                </div>
            </div>

            <div>
                <div>
                    <label for="password">
                        Mot de passe
                    </label>
                </div>

                {{-- <x-forms.erreur champ="password" /> --}}

                <div>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        autocomplete="current-password"
                    >
                </div>
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

    </div>

    <x-footer />

</x-layout>
