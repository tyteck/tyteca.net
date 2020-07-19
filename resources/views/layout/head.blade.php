<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('pageTitle') • Frédérick Tyteca</title>

    <!--Favicon-->
    <link rel="shortcut icon" href="/pics/favicon.png" />
    <link rel="icon" type="image/png" href="/pics/favicon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/pics/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="/pics/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/pics/favicon-16x16.png" />

    <!-- Custom styles for this template -->
    <link href="{{ secure_asset('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ secure_asset('/js/app.js') }}"></script>

    <meta property="og:title" content="Frédérick Tyteca" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.tyteca.net/" />

    <meta property="og:locale" content="fr_FR" />
    <meta property="og:site_name" content="Frédérick Tyteca" />

</head>