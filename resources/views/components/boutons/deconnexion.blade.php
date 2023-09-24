<div class="deconnexion">

    <form action="{{ route('admin.deconnexion') }}"

            method="POST"
    >
        @csrf

        <input type="submit" value="Déconnexion">
    </form>
</div>
