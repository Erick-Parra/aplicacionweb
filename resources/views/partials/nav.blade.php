<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- SEO Meta Tags -->
  <meta name="description" content="SOMOS UNA LIGA DE ASADAS DE LOS CANTONES DE HOJANCHA, NICOYA Y NANDAYURE. TRABAJAMOS PARA MEJORAR LOS SERVICIOS QUE PRESTAN LAS ASADAS EN NUESTRO TERRITORIO.">
  <meta name="author" content="LCA">

  <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
  <meta property="og:site_name" content="" /> <!-- website name -->
  <meta property="og:site" content="" /> <!-- website link -->
  <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
  <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
  <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
  <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
  <meta property="og:type" content="article" />

  <!-- Website Title -->
  <title>Liga Comunal del Agua</title>
  
  <!-- Styles -->
  <!--<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet"> -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/fontawesome-all.css" rel="stylesheet">
  <!--<link href="assets/css/swiper.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet"> -->
    <link href="assets/css/estilo.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="/assets/img/logotipo.ico">
  </head>

  
  <!-- Preloader -->

  <!-- end of preloader -->
  
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image"><img src="assets/img/logos/Logotipo-LigadelAgua_2.png" alt="alternative">Liga Comunal del Agua</a>
    
    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-awesome fas fa-bars"></span>
      <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link page-scroll" href="{{ route('inicio') }}">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <!-- Dropdown Menu 1 -->          
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">¿Quiénes somos?</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('JuntaDirectiva') }}"><span class="item-text">Junta Directiva</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="{{ route('Funcionarios') }}"><span class="item-text">Funcionarios</span></a>
          </div>
        </li>
        <!-- end of dropdown menu -->
        <!-- Dropdown Menu 2 -->          
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('servicesTecn') }}"><span class="item-text">Técnicos</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="{{ route('servicesAdmi') }}"><span class="item-text">Administrativos y Financieros</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="{{ route('servicesConta') }}"><span class="item-text">Contables</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="{{ route('servicesGestAmbi') }}"><span class="item-text">De Gestión Ambiental</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="{{ route('servicesSoporte') }}"><span class="item-text">De Soporte</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="{{ route('servicesLegal') }}"><span class="item-text">Legales y Notariales</span></a>
          </div>
        </li>
        <!-- end of dropdown menu -->
        <!-- Dropdown Menu 3 -->          
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Información</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('inform') }}"><span class="item-text">Tablas Informativas</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="{{route('news') }}"><span class="item-text">Publicaciones</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="{{route('galeri') }}"><span class="item-text">Galería</span></a>
          </div>
        </li>
        <!-- end of dropdown menu -->

        <li class="nav-item">
          <a class="nav-link page-scroll" href="{{ route('contact') }}">Contáctenos</a>
        </li>

        <!--Botón login-->
        @if (Auth::guest())
        <li class="nav-item mr-3 mr-lg-0">
          <a class="nav-link btn-info rounded btn-sm d-flex align-items-center" type="button" href="{{ route('login') }}"
          role="button" aria-expanded="false">
          <span class="glyphicon glyphicon-log-in fas fa-user"></span>Iniciar sesión</a>
          @else
          <li class="dropdown">
            <a class="nav-link btn-info rounded" style="text-decoration:none;" type="button" href="{{ route('login') }}" role="button" aria-expanded="false">
              {{ Auth::user()->name }} <span class="glyphicon glyphicon-log-in fas fa-user"></span>
            </a>
            @endif  <!-- end login -->
          </ul>

        </ul>
        <span class="nav-item social-icons">
          <span class="fa-stack">
            <a href="https://www.facebook.com/liga.comunaldelagua/">
              <i class="fas fa-circle fa-stack-2x facebook"></i>
              <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="https://www.instagram.com/ligacomunaldelagua/?hl=es-la">
              <i class="fas fa-circle fa-stack-2x twitter"></i>
              <i class="fab fa-twitter fa-stack-1x"></i>
            </a>
          </span>
        </span>
      </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Scripts -->
    <!--<script src="assets/js/jquery.min.js"></script> --> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="assets/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="assets/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="assets/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="assets/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="assets/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="assets/js/scripts.js"></script> <!-- Custom scripts -->


  </body>
  </html>