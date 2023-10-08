@props(["routeAjouter", "routeModifier", "routeSupprimer", "valeur", "nom"])

<div class="conteneur-btn">

    {{-- AJOUTER --}}
    <button class="ajouter">
        <a href="{{$routeAjouter}}" class="">
            Ajouter une {{$nom}}
            <span class="material-icons">
                add
            </span>
        </a>
    </button>

    {{-- MODIFICATION --}}
    <button class="modifier">
        <a href="{{ $routeModifier}}">
            Modifier l' {{$nom}}
        </a>
        <span class="edit">
            ✐
        </span>
    </button>

    {{-- SUPPRESSION --}}
    <form action="{{ $routeSupprimer }}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{ $valeur }}">
        <button class="supprimer" type="submit">
            Supprimer l'{{$nom}}
            <span class="delete">
                ♵
            </span>
        </button>
    </form>
</div>

