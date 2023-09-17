@props(["cle"])

@if (session($cle))

    <p @class([
        "absolute top-4 right-4 rounded-md p-2",
        "bg-green-300 text-green-900" => $cle == "succes",
    ])>
        {{ session($cle) }}
</p>
@endif
