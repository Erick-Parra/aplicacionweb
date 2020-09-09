<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administración</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">

    @include('admin.partials.navbar')

  <!-- /.navbar -->
{{-- Sidebar en la carpeta admin/partials --}}
@include('admin.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-1">
          <div class="col-sm-6">
            
         
          </div>
          <div class="col-sm-12">
            
          <div class="card">
            <div class="card-header">

            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="{{ route('admin') }}">Regresar al inicio</a></li>
              <li class="breadcrumb-item active">Administración Liga Comunal del Agua</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form method="POST" action="{{ route('bitacora.store')}}">
        @csrf
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                      <legend class="text-center header">Unidades de servicios de desarrollo
                      (USEDES)</legend>
                        <legend class="text-center header">Bitacora Control Operativo</legend>

                        <div class="form-group row">
                            
                          
                            <span class="col-md-2 col-md-offset-2 text-center"></span>
                            
                            <div class="col-md-8">
                            <label>
                                Nombre de la ASADA<br></label>
                                <input style="display: table-column text-align: center" name="Nom_Asada" type="text" placeholder="Ingrese el nombre de la ASADA" class="form-control">
        
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Fecha Control<br></label>
                                <input name="Fecha Control" type="date" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Encargado<br></label>
                                <input style="display: table-column text-align: center" name="Encargado" type="text" placeholder="Nombre del Encargado" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Ubicación/acueducto<br></label>
                                <input name="Ubicacion" type="text" placeholder="Digite Ubicación/acueducto" class="form-control">
                            </div>
                        </div>
                        <legend class="text-center header">Detalles de resultado del monitoreo</legend>
                            <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Turbiedad<br></label>
                                <input name="Turbiedad" type="text" placeholder="Ingrese rango alerta:1 max.adamisible: 5 " class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Olor<br></label>
                                <input name="Olor" type="text" placeholder="No aceptable / aceptable " class="form-control">
                            </div>
                        </div>
                         <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Cloro residual<br></label>
                                <input name="Cloro" type="text" placeholder="Ingrese rango 0,3 A 0,6" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                PH<br></label>
                                <input name="PH" type="text" placeholder="Ingrese rango 0,6 A 8,0" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Sabor<br></label>
                                <input name="Sabor" type="text" placeholder="No aceptable / aceptable" class="form-control">
                            </div>
                        </div>

                         <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Temperatura<br></label>
                                <input name="Temperatura" type="text" placeholder="NO aplica" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Observaciones<br></label>
                                <textarea class="form-control" id="message" name="Observacion" placeholder="Observaciones" rows="4"></textarea>
                            </div>
                        </div>
                            <div class="col-sm-12 col-xs-12" align="center">
                             <button class="btn btn-primary border rounded">REGISTRAR</button>
                             <button class="btn btn-primary border rounded">ELIMINAR</button>
                             <button class="btn btn-primary border rounded">MODIFICAR</button>
                        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2020 <a href="/">Home</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>