<!DOCTYPE html>
<html lang="en">
  <!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 4.0
	Author: PIXINVENT
	Author URL: https://themeforest.net/user/pixinvent/portfolio
  ================================================================================ -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Materialize - Material Design Admin Template</title>
    <!-- Favicons-->
    <link rel="icon" href="{{ url('images/favicon/favicon-32x32.png') }}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{ url('images/favicon/apple-touch-icon-152x152.png') }}">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{{ url('images/favicon/mstile-144x144.png') }}">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
      <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    
    @include('layouts.topnavigation')

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        
        @include('layouts.leftsidebar')

        <!-- //////////////////////////////////////////////////////////////////////////// -->
        
        @include('layouts.content')

        @include('layouts.rightsidebar')

      </div>
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    
    @include('layouts.footer')

    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
  </body>
</html>