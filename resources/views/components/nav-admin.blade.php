@props(['titre', 'route', 'valeur', 'routeDeconnexion'])

<div class="conteneur-nav-admin">
    <h2>{{ $titre }}</h2>

    {{-- Montrer le lien de façon conditionelle  --}}
    @if (!Str::endsWith(Route::currentRouteName(), '.index'))
        <div class="boutton-retour">
            <a href="{{ $route }}" class="">{{ $valeur }}</a>
        </div>
    @endif

    {{-- LIEN RETOUR --}}
    <div class="bouton-accueil-admin">

        <a href="{{ route('admin.index') }}">Accueil - Administration</a>
    </div>

        <x-boutons.deconnexion routeDeconnexion="{{ route('admin.deconnexion') }}" />


</div>
