@props(['titre'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.typekit.net/wct0vvp.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    {{-- <div class="small"></div>
    <div class="big"></div> --}}
    <main>

        {{ $slot }}

    </main>

</body>

</html>
<script>

// STYLIZED CURSOR
