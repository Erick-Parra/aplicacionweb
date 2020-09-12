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
      <form method="POST" action="{{ route('create.store')}}">
        @csrf
        <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Módulo de registro de ASADAS</legend>

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
                                Nombre Region<br></label>
                                <input name="nombreRegion" type="text" placeholder="Ingrese el nombre Region" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Fecha de registro<br></label>
                                <input name="Fecha_Registro" type="date" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Número de cédula jurídica<br></label>
                                <input name="ced_Juridica" type="int" placeholder="Ingrese el número de cédula jurídica" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Número de convenio<br></label>
                                <input name="Num_Convenio" type="int" placeholder="Ingrese el número de convenio" class="form-control">
                            </div>
                        </div>
                            <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Cantidad de abonados<br></label>
                                <input name="Cant_Abonados" type="int" placeholder="Ingrese la cantidad de abonados" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Fecha de solicitud<br></label>
                                <input name="Fecha_Solicitud" type="date" class="form-control">
                            </div>
                        </div>


                         <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Número de sección<br></label>
                                <input name="Num_Sesion" type="int" placeholder="Ingrese el número de sección" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Presidente<br></label>
                                <input name="Presidente" type="text" placeholder="Ingrese el nombre del presidente" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Vicepresidente<br></label>
                                <input name="VicePresidente" type="text" placeholder="Ingrese el nombre del vicepresidente" class="form-control">
                            </div>
                        </div>

                         <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Tesorero<br></label>
                                <input name="Tesorero" type="text" placeholder="Ingrese el nombre del tesorero" class="form-control">
                            </div>
                        </div>

                         <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Vocal 1<br></label>
                                <input name="Vocal_1" type="text" placeholder="Ingrese el nombre del vocal 1" class="form-control">
                            </div>
                        </div>

                         <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Vocal 2<br></label>
                                <input name="Vocal_2" type="text" placeholder="Ingrese el nombre del vocal 2" class="form-control">
                            </div>
                        </div>

                         <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Fiscal<br></label>
                                <input name="Fiscal" type="text" placeholder="Ingrese el nombre del fiscal" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Razón de afiliación<br></label>
                                <textarea class="form-control" id="message" name="Razon_Afiliacion" placeholder="Explique la razón de su a afiliación" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Teléfono<br></label>
                                <input id="phone" name="Telefono" type="int" placeholder="Ingrese el número de teléfono" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Correo<br></label>
                                <input id="email" name="Correo" type="email" placeholder="Ingrese el correo electrónico" class="form-control">
                                <br>
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