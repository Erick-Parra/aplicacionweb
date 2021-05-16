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
    <link href="assets/css/swiper.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/estilo.css" rel="stylesheet">
    
    <!-- Favicon  -->
    <link rel="icon" href="/assets/img/logotipo.ico">
</head>
<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" style="color: #fff;"><img src="assets/img/logos/Logotipo-LigadelAgua_1.webp" alt="alternative">Liga Comunal del Agua</a>
        
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
                    <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">¿Quiénes somos?</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('JuntaDirectiva') }}"><span class="item-text">Junta Directiva</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{ route('Funcionarios') }}"><span class="item-text">Funcionarios</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->
                <!-- Dropdown Menu 2 -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios</a>
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
                    <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Información</a>
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

                    <!-- redes sociales -->
                    <span class="nav-item social-icons">
                        <span class="fa-stack">
                            <a href="https://www.facebook.com/liga.comunaldelagua/">
                                <i class="fas fa-circle fa-stack-2x facebook"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/ligacomunaldelagua/?hl=es-la">
                                <i class="fas fa-circle fa-stack-2x instagram"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                    </span> <!-- end redes sociales -->
                </div>
            </nav> <!-- end of navbar -->
            <!-- end of navigation -->


            <!-- Header -->
            <header id="header" class="header">
                <div class="header-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text-container">
                                    <h1><span class="turquoise">Liga Comunal del Agua</span></h1>
                                    <p class="p-large">Somos su mejor opción para mejorar los servicios de las ASADAS de Hojancha, Nicoya y Nandayure.</p>
                                    <p class="p-large"><span>Horario: lunes a viernes de 8: 00 am a 4: 00 pm</span></p>
                                </div> <!-- end of text-container -->
                            </div> <!-- end of col -->
                            <div class="col-lg-6">
                                <div class="image-container">
                                    <img class="img-fluid" src="assets/img/logos/logoliga.webp" alt="alternative">
                                </div> <!-- end of image-container -->
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->
                    </div> <!-- end of container -->
                </div> <!-- end of header-content -->
            </header> <!-- end of header -->
            <!-- end of header -->


            <!--quienes somos-->
            <div id="services" class="cards-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>¿Quiénes Somos?</h2>
                            <p class="p-heading p-large">Somos una liga de asadas de los cantones de Hojancha, Nicoya y Nandayure. Trabajamos para mejorar los servicios que prestan las ASADAS en nuestro territorio.</p>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                    <div class="row">
                        <div class="col-lg-12">

                            <!-- Card -->
                            <div class="card">
                                <img class="card-image" src="assets/images/services-icon-2.webp" alt="alternative">
                                <div class="card-body">
                                    <h4 class="card-title">MISIÓN</h4>
                                    <p>Fortalecemos la gestión comunitaria del agua, promoviendo organizaciones que presten servicios de calidad. Trabajamos para consolidar la asociatividad, articulando esfuerzos con los actores involucrados en la gestión integral del recurso hídrico.</p>
                                </div>
                            </div>
                            <!-- end of card -->

                            <!-- Card -->
                            <div class="card">
                                <img class="card-image" src="assets/images/services-icon-1.webp" alt="alternative">
                                <div class="card-body">
                                    <h4 class="card-title">VISIÓN</h4>
                                    <p>Todas las comunidades del territorio acceden a servicios de agua y saneamiento sostenibles y de calidad, participando activamente en el manejo y protección del recurso hídrico.</p>
                                </div>
                            </div>
                            <!-- end of card -->

                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div> <!-- end of cards-1 -->
            <!-- end quienes somos -->


            <!-- carousel actividades -->
            <div class="slider-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Actividades</h5>

                            <!-- Image Slider -->
                            <div class="slider-container">
                                <div class="swiper-container image-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="image-container">
                                                <img class="img-responsive" src="assets/img/galeria/01.webp" alt="alternative">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-container">
                                                <img class="img-responsive" src="assets/img/galeria/02.webp" alt="alternative">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-container">
                                                <img class="img-responsive" src="assets/img/galeria/03.webp" alt="alternative">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-container">
                                                <img class="img-responsive" src="assets/img/galeria/04.webp" alt="alternative">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-container">
                                                <img class="img-responsive" src="assets/img/galeria/05.webp" alt="alternative">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-container">
                                                <img class="img-responsive" src="assets/img/galeria/06.webp" alt="alternative">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-container">
                                                <img class="img-responsive" src="assets/img/galeria/07.webp" alt="alternative">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="image-container">
                                                <img class="img-responsive" src="assets/img/galeria/08.webp" alt="alternative">
                                            </div>
                                        </div>
                                    </div> <!-- end of swiper-wrapper -->
                                </div> <!-- end of swiper container -->
                            </div> <!-- end of slider-container -->
                            <!-- end of image slider -->

                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div> <!-- end of slider-1 -->
            <!-- end carousel actividades -->

            <!-- convenios -->
            <div class="slider-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="image-container">
                                <img class="img-fluid" src="assets/images/testimonials-2-men-talking.webp" alt="alternative">
                            </div> <!-- end of image-container -->
                        </div> <!-- end of col -->
                        <div class="col-lg-6">
                            <h2>Convenios</h2>

                            <!-- Card Slider -->
                            <div class="slider-container">
                                <div class="swiper-container card-slider">
                                    <div class="swiper-wrapper">

                                        <!-- Slide -->
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <img class="card-image" src="assets/img/convenios/ElToledo.webp" alt="alternative">
                                                <div class="card-body">
                                                    <p class="testimonial-text">Para la ejecución de proyectos y administración de oficinas de la sede de la LCA, fortalecimiento y consolidación organizacional de la Liga.</p>
                                                    <p class="testimonial-author">EL TOLEDO</p>
                                                </div>
                                            </div>
                                        </div> <!-- end of swiper-slide -->
                                        <!-- end of slide -->

                                        <!-- Slide -->
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <img class="card-image" src="assets/img/convenios/logo_tecnolab.webp" alt="alternative">
                                                <div class="card-body">
                                                    <p class="testimonial-text">Para dar el servicio de análisis de la calidad del agua del las ASADAS.</p>
                                                    <p class="testimonial-author">TECNOLAB</p>
                                                </div>
                                            </div>        
                                        </div> <!-- end of swiper-slide -->
                                        <!-- end of slide -->

                                        <!-- Slide -->
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <img class="card-image" src="assets/img/convenios/guanacaste-community-fund.webp" alt="alternative">
                                                <div class="card-body">
                                                    <p class="testimonial-text">Para el fortalecimiento de la LCA y las ASADAS.</p>
                                                    <p class="testimonial-author">FONDO COMUNITARIO GUANACASTE</p>
                                                </div>
                                            </div>        
                                        </div> <!-- end of swiper-slide -->
                                        <!-- end of slide -->

                                        <!-- Slide -->
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <img class="card-image" src="assets/img/convenios/Harmoy.webp" alt="alternative">
                                                <div class="card-body">
                                                    <p class="testimonial-text">Con el programa de responsabilidad empresarial del Hotel Harmony para el fortalecimiento y consolidación de la LCA.</p>
                                                    <p class="testimonial-author">THE HARMONY HOTEL</p>
                                                </div>
                                            </div>        
                                        </div> <!-- end of swiper-slide -->
                                        <!-- end of slide -->

                                        <!-- Slide -->
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <img class="card-image" src="assets/img/convenios/avina.webp" alt="alternative">
                                                <div class="card-body">
                                                    <p class="testimonial-text">Para la creación y operación de la Unidad de Prestación de Servicios a las ASADAS (USEDES).</p>
                                                    <p class="testimonial-author">FUNDACIÓN AVINA</p>
                                                </div>
                                            </div>        
                                        </div> <!-- end of swiper-slide -->
                                        <!-- end of slide -->

                                        <!-- Slide -->
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <img class="card-image" src="assets/img/convenios/Asesoreslegales.webp" alt="alternative">
                                                <div class="card-body">
                                                    <p class="testimonial-text">Con tres asesores legales para dar servicios de asesoría legal y trámites legales a las ASADAS.</p>
                                                    <p class="testimonial-author">ASESORÍA LEGAL</p>
                                                </div>
                                            </div>        
                                        </div> <!-- end of swiper-slide -->
                                        <!-- end of slide -->

                                        <!-- Slide -->
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <img class="card-image" src="assets/img/convenios/logo_ice.webp" alt="alternative">
                                                <div class="card-body">
                                                    <p class="testimonial-text">Para la donación de árboles cada año, destinados a la campaña de reforestación de áreas de recarga y zonas de protección de nacientes
                                                    y pozos de las ASADAS.</p>
                                                    <p class="testimonial-author">INSTITUTO COSTARRICENSE DE ELECTRICIDAD</p>
                                                </div>
                                            </div>        
                                        </div> <!-- end of swiper-slide -->
                                        <!-- end of slide -->

                                        <!-- Slide -->
                                        <div class="swiper-slide">
                                            <div class="card">
                                                <img class="card-image" src="assets/img/convenios/PNUD.webp" alt="alternative">
                                                <div class="card-body">
                                                    <p class="testimonial-text">Con el proyecto de fortalecimiento de ASADAS PNUD, para el apoyo a la creación
                                                    y operación de la USEDES para prestar servicios a las ASADAS.</p>
                                                    <p class="testimonial-author">PNUD</p>
                                                </div>
                                            </div>        
                                        </div> <!-- end of swiper-slide -->
                                        <!-- end of slide -->

                                    </div> <!-- end of swiper-wrapper -->

                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <!-- end of add arrows -->

                                </div> <!-- end of swiper-container -->
                            </div> <!-- end of slider-container -->
                            <!-- end of card slider -->

                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div> <!-- end of slider-2 -->
            <!-- end convenios -->

            <!-- Contactos -->
            <div id="contact" class="form-2">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>INFORMACIÓN DEL CONTACTO</h2>
                    <ul class="list-unstyled li-space-lg">
                      <li class="address">200 metros al oeste del supermecado Hermanos pineda en Hojancha</li>
                      <li><i class="fas fa-phone"></i><a class="turquoise">4080-1086</a></li>
                      <li><i class="fas fa-envelope"></i><a class="turquoise">ligacomunaldelagua@gmail.com</a></li>
                  </ul>
              </div> <!-- end of col -->
          </div> <!-- end of row -->
          <div class="row justify-content-center">
              <div class="col-lg-6">
                <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.5078103674364!2d-85.42217458571767!3d10.057412174803826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9fbb6d24e2ed3d%3A0xb59b2b5d2f0f9a7b!2sCooc!5e0!3m2!1ses-419!2scr!4v1597436460605!5m2!1ses-419!2scr" allowfullscreen></iframe>
              </div>
          </div> <!-- end of col -->

      </div> <!-- end of row -->
  </div> <!-- end of container -->
</div> <!-- end of form-2 -->
<!-- end contactos -->


<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-col">
                    <h4>Servicios LCA</h4>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Servicios Técnicos</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Servicios Administrativos y Financieros</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Servicios Contables</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Servicios de Gestión Ambiental</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Servicios de Soporte</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Servicios Legales y Notariales</div>
                        </li>
                    </ul>
                </div>
            </div> <!-- end of col -->

            <div class="col-md-4">
                <div class="footer-col last text-center">
                    <h4>Redes Sociales</h4>
                    <span class="fa-stack">
                        <a href="https://www.facebook.com/liga.comunaldelagua/">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>

                    <span class="fa-stack">
                        <a href="https://www.instagram.com/ligacomunaldelagua/?hl=es-la">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
                </div> 
            </div> <!-- end of col -->

            <div class="col-md-4">
                <div class="footer-col middle">
                    <h4>Desarrollado por</h4>
                    <ul class="list-unstyled li-space-lg">
                     <div class="bg-image hover-overlay ripple shadow-1-strong rounded"data-ripple-color="light">
                         <p class="logoU"><img src="assets/img/logos/LOGO%20IG%20NEGRO%20(1).webp" width="170" height="200" style="filter: blur(0px) brightness(65%) contrast(200%);"><img class="img-fluid" src="assets/img/logos/Logo-UNA-Rojo_FondoTransparente.webp"  width="100" height="200"style="filter: contrast(200%);"></p></div>  
                     </ul>
                 </div>
             </div> <!-- end of col -->
         </div> <!-- end of row -->
     </div> <!-- end of container -->
 </div> <!-- end of footer -->  
 <!-- end footer -->


 <!-- Copyright -->
 <div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © 2021 <a>LCA</a> - Todos los derechos reservados</p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright --> 
<!-- end copyright -->


<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="assets/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
<script src="assets/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="assets/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
<script src="assets/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
<script src="assets/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="assets/js/scripts.js"></script> <!-- Custom scripts -->

</body>
</html>