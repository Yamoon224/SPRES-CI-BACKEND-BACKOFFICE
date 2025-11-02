<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-style-mode" content="1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        <!-- Fonts -->

        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendor/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendor/spacing.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vendor/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/waves.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/nano.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/line-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/remixicon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/tabler-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body class="body-area">
        <x-app-loading></x-app-loading>
        <!-- Dashboard page wrapper start -->
        <div class="page">

            <!-- authentication area start-->
            <div class="authentication-wrapper basic-authentication">
                <div class="authentication-inner">
                    <div class="card">
                        <div class="authentication-top text-center mb-20">
                            <a href="javascript:;" class="authentication-logo logo-black">
                                <x-app-logo with="80" height="60" />
                            </a>
                            <a href="javascript:;" class="authentication-logo logo-white">
                                <x-app-logo />
                            </a>
                            <p class="text-danger">{{ !$errors->isEmpty() ? implode(', ', $errors->all()) : '' }}</p>
                        </div>
                            
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>


        <!-- JS here -->
        <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery-3.7.0.js') }}"></script>
        <script src="{{ asset('js/plugins/popper.min.js') }}"></script>
        <script src="{{ asset('js/vendor/height-equal.js') }}"></script>
        <script src="{{ asset('js/vendor/isotope.pkgd.js') }}"></script>
        <script src="{{ asset('js/vendor/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/plugins/smooth-scrollbar.js') }}"></script>
        <script src="{{ asset('js/vendor/authentication.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/vendor/sidebar.js') }}"></script>
    </body>
</html>
