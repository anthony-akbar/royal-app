<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="icon" type="image/icon" href="/svgexport-13.svg">
    <link rel="shortcut icon" type="image/icon" href="/svgexport-13.png">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>
    <title>StickyMobile BootStrap</title>
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
<div id="preloader">
    <div class="spinner-border color-highlight" role="status"></div>
</div>
<div id="page">
    <div class="header-bar header-fixed header-app header-auto-show">
        <a href="#" data-back-button><i class="bi bi-chevron-left font-13"></i></a>
        <a href="#" class="header-title">Back to Components</a>
        <a href="#" data-toggle-theme class="show-on-theme-dark"><i class="bi bi-sun-fill color-yellow-dark font-16"></i>
            <a href="#" data-toggle-theme class="show-on-theme-light"><i class="bi bi-moon-fill font-13"></i>
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-sidebar"><i class="font-16 bi bi-list"></i></a>
    </div>

    @include('mobile.partials.footer-bar')
    <div class="header-bar header-fixed header-app header-auto-show">
        @include('mobile.partials.title')
    </div>
    <div class="page-content footer-clear">
        @yield('content')
    </div>
</div>


<script type="text/javascript" src="{{ asset('/scripts/bootstrap.min.js') }}" defer></script>
<script type="text/javascript" src="{{ asset('/scripts/custom.js') }}" defer></script>

</body>
</html>
