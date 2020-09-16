<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
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
      
    <nav class="navbar navbar-light navbar-expand sticky-top" style="background-color: #003357;">
        <div class="container"><img id="logo" src="assets/img/logos/Logotipo-LigadelAgua_2.png"><a class="navbar-brand"  style="color: rgba(243,246,248,0.99);" href="#"><strong>Liga Comunal del Agua</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>       
            
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a  style="color: rgba(243,246,248,0.99);" class="nav-link active"  href={{ route('inicio') }}>Inicio</a></li>
                    <li class="nav-item" role="presentation"><a style="color: rgba(243,246,248,0.99);" class="nav-link" href="">¿Quiénes Somos?</a>
                     <ul>
                            <li class="nav-item" style="background-color: #003357;" role="presentation"><a  style="color: rgba(243,246,248,0.99);" class="nav-link" href={{ route('JuntaDirectiva') }}>Junta Directiva</a></li>
                           <li class="nav-item" style="background-color: #003357;" role="presentation" ><a style="color: rgba(243,246,248,0.99);" class="nav-link"  href={{ route('Funcionarios') }}>  Funcionarios</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" role="presentation"><a style="color: rgba(243,246,248,0.99);" class="nav-link" href="">Servicios</a>
                        <ul>
                            <li class="nav-item" style="background-color: #003357;" role="presentation"><a style="color: rgba(243,246,248,0.99);" class="nav-link" href={{ route('servicesAdmi') }}>Administrativos</a></li>
                            <li class="nav-item" style="background-color: #003357;" role="presentation"><a style="color: rgba(243,246,248,0.99);" class="nav-link" href={{ route('servicesTecn') }}>Técnicos</a></li>
                            <li class="nav-item" style="background-color: #003357;" role="presentation"><a style="color: rgba(243,246,248,0.99);" class="nav-link" href={{ route('servicesLegal') }}>Legales</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" role="presentation"><a style="color: rgba(243,246,248,0.99);" class="nav-link" href="">Información</a>
                         <ul>
                            <li class="nav-item" style="background-color: #003357;" role="presentation"><a style="color: rgba(243,246,248,0.99);" class="nav-link" href={{route('info') }}>Gráficos</a></li>
                            <li class="nav-item" style="background-color: #003357;" role="presentation"><a style="color: rgba(243,246,248,0.99);" class="nav-link" href={{ route('news') }}>Noticias</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" role="presentation"><a style="color: rgba(243,246,248,0.99);" class="nav-link" href="{{ route('contact') }}">CONTÁCTENOS</a></li>
                </ul>
        </div>
        </div>
    </nav>
<body>