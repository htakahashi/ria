<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Spectral</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- Include Material Icons to Replace Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!--  -->


    <!-- To Change Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Proza+Libre" rel="stylesheet">
    <!-- -->

    <link rel="icon" type="image/png" href="/images/logo.png">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
        <!-- Page Wrapper -->
            <div id="page-wrapper">

                <!-- Header -->
                    <header id="header">

                        <nav id="nav">
                            <ul>
                                <li class="special">
                                    <a href="#menu" class="menuToggle"><span>Menu</span></a>
                                    <div id="menu">
                                        <ul>
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            <li><a href="{{ route('register') }}">Sign Up</a></li>
                                            <li><a href="{{ route('login') }}">Log In</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </header>



                                    @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Welcome!<br>

                                    <div class="box alt">
                                        <div class="row uniform 50%">
                                            <div class="12u"><span class="image fit"><img src="images/banner.jpg" alt="" /></span></div>
                                            <div class="4u"><span class="image fit"><img src="images/1.jpg" alt="" /></span></div>
                                            <div class="4u"><span class="image fit"><img src="images/2.jpg" alt="" /></span></div>
                                            <div class="4u"><span class="image fit"><img src="images/3.jpg" alt="" /></span></div>
                                            <div class="4u"><span class="image fit"><img src="images/7.jpg" alt="" /></span></div>
                                            <div class="4u"><span class="image fit"><img src="images/8.jpg" alt="" /></span></div>
                                            <div class="4u"><span class="image fit"><img src="images/9.jpg" alt="" /></span></div>
                                            <div class="4u"><span class="image fit"><img src="images/4.jpg" alt="" /></span></div>
                                            <div class="4u"><span class="image fit"><img src="images/5.jpg" alt="" /></span></div>
                                            <div class="4u"><span class="image fit"><img src="images/6.jpg" alt="" /></span></div>
                                        </div>
                                    </div>
                                    <h5>Left &amp; Right</h5>
                                    <p><span class="image left"><img src="images/pic04.jpg" alt="" /></span>Morbi mattis mi consectetur tortor elementum, varius pellentesque velit convallis. Aenean tincidunt lectus auctor mauris maximus, ac scelerisque ipsum tempor. Duis vulputate ex et ex tincidunt, quis lacinia velit aliquet. Duis non efficitur nisi, id malesuada justo. Maecenas sagittis felis ac sagittis semper.</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
                                    





        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>

    </body>
</html>