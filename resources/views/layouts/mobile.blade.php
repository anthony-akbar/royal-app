<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" type="text/css" href="fonts/bootstrap-icons.css">
    <link rel="icon" type="image/icon" href="/svgexport-13.svg">
    <link rel="shortcut icon" type="image/icon" href="/svgexport-13.png">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>
    <title>Royal | App</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/styles/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/css/fontawesome-all.min.css') }}">
    <link rel="manifest" href="{{ asset('/_manifest.json') }}" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" href="{{ asset('/logo-combo.png') }}">
</head>
<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">
<div id="page" data-swup="0">

    @include('mobile.partials.footer-bar')
    <div class="header-bar header-fixed header-app header-auto-show">
        @include('mobile.partials.title')
    </div>
    <div class="page-content footer-clear">
        @yield('content')
    </div>


    <script type="text/javascript" src="{{ asset('/scripts/bootstrap.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('/scripts/custom.js') }}" defer></script>

</body>
</html>
