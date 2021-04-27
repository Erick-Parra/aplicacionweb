@include('partials.nav')
<?php
require '../php/Funciones.php';
$obj = new Funciones();

$galery = $obj->getImagen();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Galeria</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/Projects-Clean.css">
</head>
<style type="text/css">

    p {
        text-align: center;
        text-align: justify;
        border:1px;
        margin:auto;
    }
    div{
        text-align: center;
    }
</style>
<body>
    <section class="projects-clean" style="background-color: #eef4f7;">
    <div class="container">
        <div class="intro">
        <h2 class="text-center">Galeria</h2>
            </div>
        <div class="row projects">
            <?php foreach ($galery as $imagen): ?>
                <div class="col-sm-6 col-lg-4 item">
                    <div class="shadow p-3 mb-5 bg-white rounded box">
                    <img style="width: auto; height: auto;"class="img-fluid" src="{{ Storage::url ($imagen['Nombre'])}}"></div>
                </div>
                    <?php endforeach; ?>
                </div>
            </div>
    </section>
    <br>
    <br>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</div>
</body>
</html>