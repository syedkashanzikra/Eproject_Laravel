<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin-asset/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-asset/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('admin-asset/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">

    <!-- Custom Style -->
    <style>
        /* Custom styles for the navbar */
        

        .navbar-nav {
            text-align: center; /* Center align the navigation links */
            width: 100%; /* Make the navbar take up the full width */
        }

        .nav-item {
            display: inline-block;
            margin: 0 10px; /* Add spacing between navigation links */
        }

        .nav-link {
            color: white !important; /* Change the text color to white */
        }

        /* Custom styles for the hero section */
        .hero {
            text-align: center; /* Center align the content in the hero section */
        }
    </style>

    <title>Admin</title>
</head>
<body>

<header class="site-navbar site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center position-relative">

            <nav class="navbar navbar-expand-lg site-navbar">
                <a class="navbar-brand" href="/">Welcome</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto text-center justify-content-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.products.index') }}">Pending Product list</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.users') }}">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.traffic') }}">Daily Traffic</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>

    </div>
</header>

<section class="hero">
    <div class="slider_bg_box"><img src="{{ asset('images/Consumer-Electronics-Testing.jpg') }}" alt=""></div>
</section>
@yield('admin-body')

<script src="{{ asset('admin-asset/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('admin-asset/js/popper.min.js') }}"></script>
<script src="{{ asset('admin-asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('adminasset/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('admin-asset/js/main.js') }}"></script>
</body>
</html>
