@include('partials.nav')
<?php
require '../php/Funciones.php';
$obj = new Funciones();

$imgporcent = $obj->getTblImgporcent();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Publicaciones</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/Projects-Clean.css">
</head>
<body>
   <section class="projects-clean" style="background-color: #eef4f7;">
    <div class="container">
        <div class="intro">
        <h2 class="text-center">Cuadros Informativos</h2>
        <p class="text-center">Estadisticas que se realizan periódicamente en la LCA.</p>
            </div>
        <div class="row projects">
            <?php foreach ($imgporcent as $publicacion): ?>
                <div class="col-lg-6 col-md-6 col-xs-6">
                        <div class="client-logo">
                            <a class="text-center" href="https://www.facebook.com/liga.comunaldelagua/" target="_blank"><img
                                    style="width: auto; height: auto;" src="{{ Storage::url ($publicacion['imagen'])}}" class="img-fluid"
                                    alt="LCA"></a>
                        </div>
                    </div>
        <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>