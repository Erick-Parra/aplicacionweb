<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <meta charset="UTF-8"/>
    <title> LCA </title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Red+Hat+Text:400,500">
    <link rel="stylesheet" href="/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="/assets/css/3-Cards-per-Row.css">
    <link rel="stylesheet" href="/assets/css/Bold-BS4-CSS-Image-Slider.css">
    <link rel="stylesheet" href="/assets/css/cards.css">
    <link rel="stylesheet" href="/assets/css/Dark-Footer.css">
    <link rel="stylesheet" href="/assets/css/Features-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/Team-Clean.css">
</head>
    <style type="text/css">
        .nav ul{
            list-style: none;
            padding: 0;
        }

        .nav li ul{
            display: none;
            position: absolute;
            min-width: 100px;
        }
   

        .nav li:hover > ul{
            display: block;
        }

        .nav li ul li{
            position: relative;
            background-color: #ffff;
    </style>

<body>
      
   <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #003357; color: rgba(243,246,248,0.99);">
  <div class="container-fluid">
   <a class="navbar-brand" href="#" style="color: rgba(243,246,248,0.99);">
      <img
        src="assets/img/logos/Logotipo-LigadelAgua_2.png"
        height="30"
        alt=""
        loading="lazy"/>
      Liga Comunal del Agua
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarText"
      aria-controls="navbarText"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('inicio') }}" style="color: rgba(243,246,248,0.99);">Inicio</a>
        </li>
        <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle" style="color: rgba(243,246,248,0.99);"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-toggle="dropdown"
          aria-expanded="false">
          ¿Quiénes somos?
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #003357; 
        color: rgba(243,246,248,0.99);">
          <li><a class="dropdown-item" href="{{ route('JuntaDirectiva') }}" style="background-color: #003357; color: rgba(243,246,248,0.99); text-transform: uppercase;">Junta directiva</a></li>
          <li><a class="dropdown-item" href="{{ route('Funcionarios') }}" style="background-color: #003357; 
          color: rgba(243,246,248,0.99); text-transform: uppercase;">Funcionarios</a></li>
        </ul>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle" style="color: rgba(243,246,248,0.99);"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-toggle="dropdown"
          aria-expanded="false">
          Servicios
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #003357; 
        color: rgba(243,246,248,0.99);">
          <li><a class="dropdown-item" href="{{ route('servicesAdmi') }}" style="background-color: #003357; 
          color: rgba(243,246,248,0.99); text-transform: uppercase;">Administrativos</a></li>
          <li><a class="dropdown-item" href="{{ route('servicesTecn') }}" style="background-color: #003357; 
          color: rgba(243,246,248,0.99); text-transform: uppercase;">Técnicos</a></li>
        </ul>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle" style="color: rgba(243,246,248,0.99);"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-toggle="dropdown"
          aria-expanded="false">
          Información
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #003357; color: rgba(243,246,248,0.99);">
          <li><a class="dropdown-item" href="{{route('info') }}" style="background-color: #003357; color: rgba(243,246,248,0.99); text-transform: uppercase;">Gráficos</a></li>
          <li><a class="dropdown-item" href="{{route('news') }}" style="background-color: #003357; color: rgba(243,246,248,0.99); text-transform: uppercase;">Noticias</a></li>
        </ul>
      </li>
       <li class="nav-item">
          <a class="nav-link" href="{{ route('contact') }}" style="color: rgba(243,246,248,0.99);">Contáctenos</a>
        </li>



        <!--Botón login-->
      <li class="nav-item mr-3 mr-lg-0">
        <a class="nav-link btn-info rounded" type="button" href="{{ route('login') }}" 
        role="button" aria-expanded="false" style="width: 140px;">
          <span class="glyphicon glyphicon-log-in fas fa-user"></span>Iniciar sesión</a>
          

      </ul>
    </div>
  </div>
</nav>

<body>