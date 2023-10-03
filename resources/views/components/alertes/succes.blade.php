@props(["cle"])

@if (session($cle))

    <div class="alerte_succes">
        <p>{{ session($cle) }}</p>
    </div>

@endif
