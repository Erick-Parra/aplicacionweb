@include('partials.nav')
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
<style type="text/css">
    p {
        text-align: center;
        text-align: justify;
        border: 1px;
        margin: auto;
    }

    div {
        text-align: center;
    }
</style>

<body>
    <section class="projects-clean" style="background-color: #eef4f7;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">NOTICIAS</h2>
                <p class="text-center">Actividades que se realizan periódicamente en la LCA.</p>
            </div>
            <div class="row projects">
                @foreach ($posts as $publicacion)
                <div class="col-sm-6 col-lg-4 item">
                    <div class="shadow p-3 mb-5 bg-white rounded box">
                        <img class="img-fluid" src="{{ Storage::url ($publicacion['imagen'])}}">
                        <h3 class="name">{{$publicacion->TituloNoti}}</h3>
                        <p>{{$publicacion->InfoNoti}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <br>
    <br>
    <div class="form-group">
        <h2 class="text-center">Vídeos Informativos</h2>
        <p class="text-center">Sección de labores que realizan la Liga Comunal del Agua.</p>
    </div>
    <div style="text-align:center;">
        <iframe width="420" height="315" position="absolute" top="0" left="0" src="https://www.youtube.com/embed/b-VFaX1cOvU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <br>
    <br>
    <div style=”text-align:right;”>
        <p class="text-center">Accede a nuestros servicios dan clic en los siguientes links.</p>
    </div>
    <div style=”text-align:right;”>
        <a href="https://www.youtube.com/watch?v=Ey4Q_hK5qDc">Servicios Legales y Notariales</a>
    </div>
    <div style=”text-align:right;”>
        <a href="https://www.youtube.com/watch?v=Y60-_0E0IFE">Servicios Técnicos</a>
    </div>
    <div style=”text-align:right;”>
        <a href="https://www.youtube.com/watch?v=T3Z-emHsgss">Servicios Contables</a>
    </div>
    <div style=”text-align:right;”>
        <a href="https://www.youtube.com/watch?v=_KkNpEQD1NI">Servicios Gestión Ambiental</a>
    </div>
    <div style=”text-align:right;”>
        <a href="https://www.youtube.com/watch?v=nXQhJkWcPK8">Servicios Administrativos y Financieros</a>
    </div>
    <div style=”text-align:right;”>
        <a href="https://www.youtube.com/watch?v=2y39h0QoH_c">Servicios Administrativos y Financieros</a>
    </div>
    <div class="form-group">
        <h2 class="text-center">Documentos Informativos</h2>
        <p class="text-center">Información de la Liga Comunal del Agua.</p>
    </div>
    <div style="text-align:center;">
        <iframe src="https://drive.google.com/file/d/1So5wlognBznegLdXOaSmx5kA4K_IMJKw/preview" width="440" height="280"></iframe>
    </div>
    <div style=”text-align:right;”>
        <p class="text-center">Accede a nuestro estudio de caso en el siguiente link.</p>
    </div>
    <div style=”text-align:right;”>
        <a href="https://drive.google.com/file/d/16TOc0sgG5PMbuuHC5G5-rveHBOEERx4p/view">Estudio de Caso</a>
    </div>
    </div>
    <br>
    <br>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </div>
</body>

</html>