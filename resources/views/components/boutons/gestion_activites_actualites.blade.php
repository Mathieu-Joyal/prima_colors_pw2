
@props(["routeAjouter", "routeModifier", "routeSupprimer", "valeur", "nom"])
<div class="conteneur-btn">
    {{-- AJOUTER --}}
    <button class="ajouter">
        <a href="{{$routeAjouter}}" class="">
            Ajouter une {{$nom}}
        </a>
    </button>
    {{-- MODIFICATION --}}
    <button class="modifier">
        <a href="{{ $routeModifier}}">
            Modifier une {{$nom}}
        </a>
    </button>
    {{-- SUPPRESSION --}}
    <form action="{{ $routeSupprimer }}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{ $valeur }}">
        <button class="supprimer" type="submit">

            Supprimer l'{{$nom}}
        </button>
    </form>
</div>
{{-- route('admin.activites.edit', ['id' => $activite->id])
route('admin.activites.destroy')
$activite->id --}}
