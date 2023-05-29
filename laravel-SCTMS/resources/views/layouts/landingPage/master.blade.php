<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coop Training Platform</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="img/demo/icon.png">
    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/landingPage/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/landingPage/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/landingPage/animate.css" />
    <link rel="stylesheet" href="assets/css/landingPage/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/landingPage/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/landingPage/main.css" />
    <link rel="stylesheet" href="assets/css/landingPage/fontawesome-all.min.css">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet" />


</head>
<body>
@include('layouts.landingPage.header')
<!--====== HEADER PART ENDS ======-->



@yield('content')



<!--====== FOOTER PART START ======-->
@include('layouts.landingPage.footer')

@include('layouts.landingPage.javaScript')
</body>

</html>
