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
            <h1>Crear Asasdas</h1>
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
      <form method="POST" action="{{ route('create.store')}}">
        @csrf
        <label>
          Nombre de la asada <br>
        <input type="text" name="Nom_Asada">
      </label>
      <br>
      <label>
          Fecha de Registro <br>
        <input type="date" name="Fecha_Registro">
      </label>
      <br>
        <label>
          Numero de Cédula Juridica <br>
        <input type="int" name="ced_Juridica">
      </label>
      <br>
        <label>
          Número de Convenio <br>
        <input type="int" name="Num_Convenio">
      </label>
      <br>
        <label>
          Cantidad de Abonados <br>
        <input type="int" name="Cant_Abonados">
      </label>
       <br>
      <label>
          Fecha de Solicitud <br>
        <input type="date" name="Fecha_Solicitud">
      </label>
      <br>
      <label>
          Numero de Seccción<br>
        <input type="int" name="Num_Sesion">
      </label>
      <br>
        <label>
          Presidente<br>
        <input type="text" name="Presidente">
      </label>
      <br>
       <label>
          VicePresidente<br>
        <input type="text" name="VicePresidente">
      </label>
      <br>
      <label>
          Tesorero<br>
        <input type="text" name="Tesorero">
      </label>
      <br>
      <label>
          Vocal 1<br>
        <input type="text" name="Vocal_1">
      </label>
      <br>
      <label>
          Vocal 2<br>
        <input type="text" name="Vocal_2">
      </label>
      <br>
      <label>
          Fiscal<br>
        <input type="text" name="Fiscal">
      </label>
      <br>
      <label>
          Razón de Afiliación<br>
        <textarea name="Razon_Afiliacion"></textarea>
      </label>
      <br>
      <label>
          Telefono<br>
        <input type="int" name="Telefono">
      </label>
      <br>
      <label>
          Correo<br>
        <input type="text" name="Correo">
      </label>
      <br>
      <button>Crear</button>
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