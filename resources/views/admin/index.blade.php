<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administración LCA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="/assets/css/styles.css">
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

          <div class="col-sm-12">
            <div class="card">
            <div class="card-header">
            <ol class="breadcrumb float-sm-left"> <img id="logo" src="assets/img/logos/Logotipo-LigadelAgua_2.webp">
              <li class="breadcrumb-item active">Administración Liga Comunal del Agua</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
     
<div class="card" style="width: auto;">
  <div class=" text-center card-header" style="font-family: Antic; background-color: #003357; color: #FDFEFE;">
<img id="logo" style="align-content: center;"src="assets/img/logos/Logotipo-LigadelAgua_2.webp">{{ __('Lista de ASADAS registradas') }}
    
    <!--<b><legend class="text-center header" style="font-size: 15px;">Lista de ASADAS registradas</legend></b>
    <img id="logo" style="align-content: right;"src="assets/img/logos/Logotipo-LigadelAgua_2.png">-->
    
  </div>
  <ul class="list-group list-group-flush" style="text-align: center;">
    @forelse($asadas as $asadaitem)
            <li class="list-group-item"><a href="{{ route('admin.show', $asadaitem)}}" >{{ $asadaitem->Nom_Asada }}</a></li>
            @empty
            <li class="list-group-item">No hay ASADAS registradas</li>
            @endforelse
            {{$asadas->links()}}
  </ul>
        <!-- /.card-body -->
        <div class="card-footer">
          <!--Footer-->
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="height: 10vh;">
    <div class="float-right d-none d-sm-block">
      <b>Created By</b> NEPV
    </div>
    <strong>Copyright &copy; 2020.</strong> All rights
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

