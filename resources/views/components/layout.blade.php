@props(['titre'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TMK4KSGPMW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-TMK4KSGPMW');
    </script>
    <link rel="stylesheet" href="https://use.typekit.net/wct0vvp.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ $titre }}</title>

</head>

<x-header />

<body class="concours_body">
    <main>

        {{ $slot }}

    </main>
</body>

<x-footer />

</html>
