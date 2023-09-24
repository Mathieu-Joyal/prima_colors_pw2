<div class="creation">

    <form action="{{ $route }}" method="POST">
        @csrf

        <input type="submit" value="{{ $valeur }}">
    </form>
</div>
