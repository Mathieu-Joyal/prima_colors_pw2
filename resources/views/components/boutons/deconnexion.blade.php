<div class="deconnexion">

    <form action="{{ $route }}" method="POST">
        @csrf

        <input type="submit" value="Déconnexion">
    </form>
</div>
