<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin-asset/fonts/icomoon/style.css') }}" >
    <link rel="stylesheet" href="{{ asset('admin-asset/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('admin-asset/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin-asset/css/bootstrap.min.css') }}">
    
    <!-- Style -->
    

    <title>Admin</title>
  </head>
  <body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3">
              <div class="site-logo">
                <a href="index.html" class="font-weight-bold">Welcome</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-primary site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-white"></span></a></span>


              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="/" class="nav-link">Home</a></li>
                  <li><a href="{{ route('admin.products.index') }}" class="nav-link">Pending Product list</a></li>
                  <li><a href="#" class="nav-link">About</a></li>
                 </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>
      <div class="hero"></div>
      @yield('admin-body')
    
  

  
    
    

    <script src="{{ asset('admin-asset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admin-asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin-asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('adminasset/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('admin-asset/js/main.js') }}"></script>
  </body>
</html>