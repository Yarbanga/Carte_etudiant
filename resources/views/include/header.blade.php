<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CONCEPTION DE CARTE</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/style.css') }}" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}" />
     
  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v1.3.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
      <a href="{{route('espace.nouveau')}}"><img src="{{asset('assets/img/profile.png') }}" alt="" class="img-fluid rounded-circle"></a>
        
        <h1 class="text-light">
<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
</a></h1>
  <p>
        <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Deconnexion</a>
        <a class="dropdown-item" href="register">ajouter un Administrateur</a>
        
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
           </form> <br>
      
  </p>
                                    



        <div class="social-links  text-center">
          <a href="https://twitter.com" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://facebook.com" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://instagram.com " target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a target="_blank" href="https://play.google.com/store/apps/details?id=com.google.android.apps.plus&hl=fr" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="https://fr.linkedin.com/"  target="_blank"class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu ">
        <ul>
          <li class="active"><a href="{{route('accueil')}}"><i class="bx bx-home"></i> <span>Accueil</span></a></li>
          <li><a href="{{route('carte.nouveau')}}"><i class="bx bx-book-content"></i> <span>Nouveau</span></a></li>
          <li><a href="{{route('carte.list')}}"><i class="bx bx-file-blank"></i> <span>Liste</span></a></li>
          <li><a href="{{route('reimprimer')}}"><i class=" bx bx-user"></i>R??imprimer</a></li>
          
         
          
         </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->