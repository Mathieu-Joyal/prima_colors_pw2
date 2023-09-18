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

        <section class="creation_employe">

            <h3>Création d'un nouvel employé</h3>
            <form action="{{ route('enregistrement.storeEmploye') }}"
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

        <section class="affichage-utilisateur">

                @foreach ( as )

                @endforeach



        </section>

        <section class="utilisteurs">
            <ul>

                @foreach ($users as $user)
                    <li>Prénom: {{$user->prenom}}</li>
                    <li>Nom: {{$user->nom}}</li>

                    @foreach ($reservations as $reservation)

                        @if ($user->id === $reservation->user_id)

                            @foreach ($forfaits as $forfait)

                                @if ($forfait->id === $reservation->forfait_id)
                                    <li>Titre du forfait: {{ $forfait->titre }}</li>

                                    @if ($un_employe->role_id === 1)

                                        <a href="{{ route('reservations.destroyByAdmin', ['id' => $reservation->id]) }}">
                                            @csrf

                                            <span>
                                                Annuler la réservation
                                            </span>
                                        </a>
                                    @endif
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
