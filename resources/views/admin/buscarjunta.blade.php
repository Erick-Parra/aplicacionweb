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
      <form method="POST" action="{{ route('buscarjunta')}}">
        @csrf
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                      <legend class="text-center header">JUNTA DIRECTIVA</legend>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></span>

                            <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              </div>
                              <br>
                              <div class="table-responsive">
                            <table class= "table table-striped table-bordered table-condense table-hover table-dark" style="opacity: 1; border="5" style="margin: 0 auto;">
    <caption>Registros Junta Directiva</caption>
    <thead class="thead-dark">
 <tr>

    <th>PUESTO</th>

    <th>ENCARGADO</th>

  </tr>
  @foreach($registro as $reg)
  <tr>

    <th>PRESIDENTE</th>

    <td>{{$reg->Presidente}}</td>

  </tr>
  <tr>

    <th>VICEPRESIDENTE</th>

    <td>{{$reg->vicePresidente}}</td>

  </tr>
  <tr>

    <th>SECRETAIO</th>

    <td>{{$reg->Secretario}}</td>
  </tr>
  <tr>

    <th>TESORERO</th>

    <td>{{$reg->Tesorero}}</td>

  </tr>
  <tr>

    <th>VOCAL</th>

    <td>{{$reg->Vocal}}</td>

  </tr>
  <tr>

    <th>SUPLENTE 1</th>

    <td>{{$reg->Suplente1}}</td>


  </tr>
  <tr>

    <th>SUPLENTE 2</th>

    <td>{{$reg->Suplente2}}</td>

  </tr>
  <tr>

    <th>FISCAL</th>

    <td>{{$reg->Fiscal}}</td>

  </tr>
  @endforeach
  </div>
      <a href="{{route('editar', $reg)}}" class="btn btn-warning btn-sm">Editar</a>
    </div>
  </table>
</div>
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