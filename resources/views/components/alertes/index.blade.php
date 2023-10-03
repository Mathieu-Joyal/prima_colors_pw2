@props(["cle", "attributes"])

@if (session($cle))

    <div {{ $attributes }}>
        <p>{{ session($cle) }}</p>
    </div>

@endif
