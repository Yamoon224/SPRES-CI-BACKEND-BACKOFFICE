<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-style-mode" content="1">
        <meta name="app-url" content="{{ env('APP_URL') }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
        <!-- Optionnel : pour compatibilité avec certains navigateurs -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendor/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendor/spacing.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendor/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/simplebar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/waves.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/nano.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/line-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/remixicon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/tabler-icons.css') }}">
        @stack('links')
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body class="body-area">
        <x-app-loading></x-app-loading>

        <!-- Dashboard page wrapper start -->
        <div class="page">
            <x-app-aside></x-app-aside>

            <x-app-header></x-app-header>

            <!-- app-content-area-start -->
            <div class="app-content-area">
                <div class="app-content-wrap">
                    <div class="container-fluid">
                        {{ $slot }}
                    </div>
                </div>
            </div>

            <x-app-footer></x-app-footer>
        </div>

        <!-- back to top area start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top area end -->

        <x-app-switcher-theme></x-app-switcher-theme>

        <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery-3.7.0.js') }}"></script>
        <script src="{{ asset('js/plugins/popper.min.js') }}"></script>
        <script src="{{ asset('js/plugins/simplebar.min.js') }}"></script>
        <script src="{{ asset('js/plugins/simplebar-active.js') }}"></script>
        <script src="{{ asset('js/vendor/height-equal.js') }}"></script>
        <script src="{{ asset('js/vendor/isotope.pkgd.js') }}"></script>
        <script src="{{ asset('js/vendor/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/vendor/backtotop.js') }}"></script>
        <script src="{{ asset('js/plugins/smooth-scrollbar.js') }}"></script>
        <script src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
        @stack('scripts')
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/vendor/sidebar.js') }}"></script>        
    </body>
</html>
