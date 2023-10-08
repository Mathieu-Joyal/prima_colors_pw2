@props(['titre'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.typekit.net/wct0vvp.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ $titre }}</title>
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXX-Y"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-XXXXXXXXX-Y');
    </script> -->

</head>

<x-header />

<body class="concours_body">

    <main>

        {{ $slot }}

    </main>

</body>

<x-footer />

</html>