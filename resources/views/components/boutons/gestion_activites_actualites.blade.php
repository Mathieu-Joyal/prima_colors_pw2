
@props(["routeAjouter", "routeModifier", "routeSupprimer", "valeur"])
<div class="conteneur-btn">
    {{-- AJOUTER --}}
    <button class="ajouter">
        <a href="{{$routeAjouter}}" class="">
            Ajouter une activité
        </a>
    </button>
    {{-- MODIFICATION --}}
    <button class="modifier">
        <a href="{{ $routeModifier}}">
            Modifier une activité
        </a>
    </button>
    {{-- SUPPRESSION --}}
    <form action="{{ $routeSupprimer }}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{ $valeur }}">
        <button class="supprimer" type="submit">

            Supprimer l'activité
        </button>
    </form>
</div>
{{-- route('admin.activites.edit', ['id' => $activite->id])
route('admin.activites.destroy')
$activite->id --}}
