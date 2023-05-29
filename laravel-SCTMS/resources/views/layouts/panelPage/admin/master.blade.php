<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Co-op Training PlatForm</title>

    <link rel="shortcut icon" type="image/x-icon" href="icon.png">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/panelPage/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/panelPage/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/css/panelPage/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/panelPage/weather-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/panelPage/weather-icons-wind.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/panelPage/summernote-bs4.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/panelPage/jquery-ui-1.10.4.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/panelPage/wizard.css') }}" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/panelPage/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/panelPage/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/panelPage/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/panelPage/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/panelPage/select2.min.css') }}"/>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" rel="stylesheet"  />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet" />


    <style>

html {
    line-height: 1.15;
        -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}

body {
    margin: 0;
}

header,
nav,
section {
    display: block;
}

figcaption,
main {
    display: block;
}

a {
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}

strong {
    font-weight: inherit;
}

strong {
    font-weight: bolder;
}

code {
    font-family: monospace, monospace;
    font-size: 1em;
}

dfn {
    font-style: italic;
}

svg:not(:root) {
    overflow: hidden;
}

button,
input {
    font-family: sans-serif;
    font-size: 100%;
    line-height: 1.15;
    margin: 0;
}

button,
input {
    overflow: visible;
}

button {
    text-transform: none;
}

button,
html [type="button"],
[type="reset"],
[type="submit"] {
    -webkit-appearance: button;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
    border-style: none;
    padding: 0;
}

button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
    outline: 1px dotted ButtonText;
}

legend {
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    color: inherit;
    display: table;
    max-width: 100%;
    padding: 0;
    white-space: normal;
}

[type="checkbox"],
[type="radio"] {
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    padding: 0;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
    height: auto;
}

[type="search"] {
    -webkit-appearance: textfield;
    outline-offset: -2px;
}

[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}

::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit;
}

menu {
    display: block;
}

canvas {
    display: inline-block;
}

template {
    display: none;
}

[hidden] {
    display: none;
}

html {
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    font-family: sans-serif;
}

*,
*::before,
*::after {
    -webkit-box-sizing: inherit;
            box-sizing: inherit;
}

p {
    margin: 0;
}

button {
    background: transparent;
    padding: 0;
}

button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
}

*,
*::before,
*::after {
    border-width: 0;
    border-style: solid;
    border-color: #dae1e7;
}

button,
[type="button"],
[type="reset"],
[type="submit"] {
    border-radius: 0;
}

button,
input {
    font-family: inherit;
}

input::-webkit-input-placeholder {
    color: inherit;
    opacity: .5;
}

input:-ms-input-placeholder {
    color: inherit;
    opacity: .5;
}

input::-ms-input-placeholder {
    color: inherit;
    opacity: .5;
}

input::placeholder {
    color: inherit;
    opacity: .5;
}

button,
[role=button] {
    cursor: pointer;
}

.bg-transparent {
    background-color: transparent;
}

.bg-white {
    background-color: #fff;
}

.bg-teal-light {
    background-color: #64d5ca;
}

.bg-blue-dark {
    background-color: #2779bd;
}

.bg-indigo-light {
    background-color: #7886d7;
}

.bg-purple-light {
    background-color: #a779e9;
}

.bg-no-repeat {
    background-repeat: no-repeat;
}

.bg-cover {
    background-size: cover;
}

.border-grey-light {
    border-color: #dae1e7;
}

.hover\:border-grey:hover {
    border-color: #b8c2cc;
}

.rounded-lg {
    border-radius: .5rem;
}

.border-2 {
    border-width: 2px;
}

.hidden {
    display: none;
}

.flex {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}

.items-center {
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
}

.justify-center {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
}

.font-sans {
    font-family: Nunito, sans-serif;
}

.font-light {
    font-weight: 300;
}

.font-bold {
    font-weight: 700;
}

.font-black {
    font-weight: 900;
}

.h-1 {
    height: .25rem;
}

.leading-normal {
    line-height: 1.5;
}

.m-8 {
    margin: 2rem;
}

.my-3 {
    margin-top: .75rem;
    margin-bottom: .75rem;
}

.mb-8 {
    margin-bottom: 2rem;
}

.max-w-sm {
    max-width: 30rem;
}

.min-h-screen {
    min-height: 100vh;
}

.py-3 {
    padding-top: .75rem;
    padding-bottom: .75rem;
}

.px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
}

.pb-full {
    padding-bottom: 100%;
}

.absolute {
    position: absolute;
}

.relative {
    position: relative;
}

.pin {
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

.text-black {
    color: #22292f;
}

.text-grey-darkest {
    color: #3d4852;
}

.text-grey-darker {
    color: #606f7b;
}

.text-2xl {
    font-size: 1.5rem;
}

.text-5xl {
    font-size: 3rem;
}

.uppercase {
    text-transform: uppercase;
}

.antialiased {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.tracking-wide {
    letter-spacing: .05em;
}

.w-16 {
    width: 4rem;
}

.w-full {
    width: 100%;
}

@media (min-width: 768px) {
    .md\:bg-left {
        background-position: left;
    }

    .md\:bg-right {
        background-position: right;
    }

    .md\:flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .md\:my-6 {
        margin-top: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .md\:min-h-screen {
        min-height: 100vh;
    }

    .md\:pb-0 {
        padding-bottom: 0;
    }

    .md\:text-3xl {
        font-size: 1.875rem;
    }

    .md\:text-15xl {
        font-size: 9rem;
    }

    .md\:w-1\/2 {
        width: 50%;
    }
}

@media (min-width: 992px) {
    .lg\:bg-center {
        background-position: center;
    }
}
</style>
<script>
    
    // Define a function to change the body tag class
    function changeBodyClass() {
      // Get the body element
      var body = document.getElementsByTagName("body")[0];
      // Check the current class of the body element
      if (body.className == "sidebar-normal") {
        // If it is "sidebar-normal", change it to "sidebar-mini"
        body.className = "sidebar-mini";
      } else {
        // If it is not "sidebar-normal", change it back to "sidebar-normal"
        body.className = "sidebar-normal";
      }
    }
  </script>

    </head>

    <body class="sidebar-mini">
        <div id="app">
            <div class="main-wrapper main-wrapper-1" id="content">
                @include('layouts.panelPage.admin.header')

                @yield('content')

                @include('layouts.panelPage.admin.javaScript')
            </div>
        </div>
    </body>

</html>
