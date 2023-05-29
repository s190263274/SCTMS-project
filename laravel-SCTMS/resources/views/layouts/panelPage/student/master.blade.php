<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - Student Panel</title>

    <link rel="shortcut icon" type="image/x-icon" href="icon.png">
    
    <!-- General CSS Files -->
    <!-- <link rel="stylesheet" href="assets/css/landingPage/bootstrap.min.css" /> -->
    <link href="{{ asset('assets/css/panelPage/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/panelPage/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/panelPage/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/panelPage/components.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/panelPage/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/panelPage/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/panelPage/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/panelPage/intlTelInput.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" rel="stylesheet"  />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet" />



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>

    <body class="layout-3">
        <div id="app">
            <div class="main-wrapper container">
                @include('layouts.panelPage.student.header')

                @yield('content')

                @include('layouts.panelPage.student.javaScript')
            </div>
        </div>
    </body>

</html>
