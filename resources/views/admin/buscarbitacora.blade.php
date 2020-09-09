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
<style type="text/css">

  table, th, td {
    border: 6px solid DODGERBLUE;
    border-collapse: collapse;
    color: MIDNIGHTBLUE; 
    background-color: SKYBLUE;
  }
  th, td{
    padding: 15px;

  }
</style>
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
      <form method="POST" action="{{ route('buscar')}}">
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

                            <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Fecha Control<br></label>
                                <form action="/buscar" method="get">
                                <div class="input-group">
                                  <input name="Fecha Control" type="date" class="form-control">
                                  <span class="input-group-prepend">
                                    <button type="submit" class="btn btn-primary">BUSCAR</button><br>
                                  </span>
                                </div>
                              </form>    
                            </div><br>
                            
                            <div class="col-md-12">
                              <br>
                            <table class= "table table-hover table-dark" style="opacity: 1; border="5" style="margin: 0 auto;">
    <caption>Registros Control Operativo</caption>
    <thead class="thead-dark">
  <tr>

    <th>Nombre ASADA</th>

    <th>Encargado</th>

    <th>Ubicacion</th>

    <th>Turbiedad</th>

    <th>Olor</th>

    <th>Cloro</th>

    <th>PH</th>

    <th>Sabor</th>

    <th>Temperatura</th>

    <th>Observaciones</th>

  </tr>
 
  
  <tr>

    <th></th>

    <td></td>

    <td></td>

    <td></td>

    <td></td>

    <td></td>

    <td></td>

    <td></td>

    <td></td>

    <td></td>

  </tr>
 


</table>
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