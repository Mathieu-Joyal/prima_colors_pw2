@props(["champ"])

@error($champ)
    <p style="color: red;">{{ $message }}</p>
@enderror
