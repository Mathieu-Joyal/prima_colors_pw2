<x-layout titre="Bienvenue!">

    <x-header />

    {{-- Succès de la connexion à confimer après résoudre problème avec auth:employe --}}
    {{-- <x-alertes.succes cle="succes" /> --}}

    {{-- Pourrait être une composante --}}
    <div class="deconnexion">
        <form action="{{ route('deconnexion.employe') }}"
                method="POST"
        >
            @csrf

            <input type="submit" value="Déconnexion">
        </form>
    </div>

    <div class="conteneur">

        <h3>Création d'un nouvel employé</h3>

        <form action="{{ route('enregistrement.storeEmploye') }}"
                method="POST"
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

            {{-- identifiant --}}
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

                    <x-forms.erreur champ="identifiant" />

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
                        id="confirmation_password"
                        name="confirmation_password"
                        type="password"
                    >

                    <x-forms.erreur champ="confirmation_password" />

                </div>

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

        <section class="utilisteurs">
            <ul>

                @foreach ($users as $user)
                    <li>Prénom: {{$user->prenom}}</li>
                    <li>Nom: {{$user->nom}}</li>

                    @foreach ($reservations as $reservation)

                        @if ($user->id === $reservation->user_id)

                            @foreach ($forfaits as $forfait)

                            {{-- ****************************************
                            NE FONCTIONNE PAS À CAUSE DE L'AUTH
                            VOIR SI DEUXIÈME ROUTE APRÈS AUTH MARCHE
                            **************************************** --}}
                                @if ($forfait->id === $reservation->forfait_id)
                                    <li>Titre du forfait: {{ $forfait->titre }}</li>
                                    <li>Description du forfait: {{ $forfait->description }}</li>

                                    <a href="{{ route('reservations.destroy', ['id' => $reservation->id]) }}">
                                        <span>
                                            Annuler la réservation
                                        </span>
                                    </a>

                                @endif


                            @endforeach

                        @endif

                    @endforeach
                @endforeach

            </ul>

        </section>
    </div>


    <x-footer />

</x-layout>
