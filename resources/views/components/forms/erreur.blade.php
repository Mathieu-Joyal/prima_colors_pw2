@props(["champ"])

@error($champ)

    <div class="form_erreur">
        <p>{{ $message }}</p>
    </div>

@enderror
