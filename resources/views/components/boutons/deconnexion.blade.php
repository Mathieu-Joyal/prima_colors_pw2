@props(["routeDeconnexion"])
<div class="deconnexion">

    <form action="{{ $routeDeconnexion }}" method="POST">
        @csrf

        <input type="submit" value="Déconnexion">
    </form>
</div>
