<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/35c69bda3a.js" crossorigin="anonymous"></script>
        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <br>
        <link rel="icon" href="{{asset('img/favicon.png')}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- animate CSS -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <!-- themify CSS -->
        <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
        <!-- fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
        <!-- magnific CSS -->
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/gijgo.min.css')}}">
        <!-- niceselect CSS -->
        <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
        <!-- slick CSS -->
        <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <!-- style CSS -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body class="antialiased">


        @include('components.footer')
    </body>
</html>
