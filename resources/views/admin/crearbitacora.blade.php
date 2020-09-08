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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bitacora Control Operativo</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form method="POST" action="{{ route('bitacora.store')}}">
        @csrf
        <label>
          Nombre de la asada <br>
        <input type="text" name="Nom_Asada">
      </label>
      <br>
      <label>
          Fecha Control <br>
        <input type="date" name="Fecha_Control">
      </label>
      <br>
        <label>
          Encargado <br>
        <input type="text" name="Encargado">
      </label>
      <br>
        <label>
          Ubicación/acueducto <br>
        <input type="text" name="Ubicacion">
      </label>
      <br>
      <h1>Detalles de resultado del monitoreo</h1>
        <label>
          Turbiedad <br>
        <input type="text" name="Turbiedad">
      </label>
       <br>
      <label>
          Olor <br>
        <input type="text" name="Olor">
      </label>
      <br>
      <label>
          Cloro residual<br>
        <input type="text" name="Cloro">
      </label>
      <br>
        <label>
          PH<br>
        <input type="text" name="PH">
      </label>
      <br>
       <label>
          Sabor<br>
        <input type="text" name="Sabor">
      </label>
      <br>
      <label>
          Temperatura<br>
        <input type="text" name="Temperatura">
      </label>
      <br>
      <label>
          Observacion<br>
        <textarea name="Observaciones"></textarea>
      </label>
      <br>
      <br>
      <button>Guardar</button>
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