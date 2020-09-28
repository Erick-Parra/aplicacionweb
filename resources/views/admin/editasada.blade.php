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
      <form method="POST" action="{{ route('admin.update', $asadas)}}">
        @csrf @method('PATCH')
        <div class="container">
                <div class="flash-message"> 
 @foreach (['danger', 'warning', 'success', 'info'] as $msg) 
  @if(Session::has('alert-' . $msg)) 

  <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p> 
  @endif 
 @endforeach 
 </div> <!-- end .flash-message --> 
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Editar Módulo de registro de ASADAS</legend>

                        <div class="form-group row">


                            <span class="col-md-2 col-md-offset-2 text-center"></span>

                            <div class="col-md-8">
                            <label>
                                Nombre de la ASADA<br></label>
                                <input style="display: table-column text-align: center" name="Nom_Asada" type="text" value="{{$asadas->Nom_Asada}}" class="form-control">

                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Número de cédula jurídica<br></label>
                                <input name="ced_Juridica" type="int" value="{{$asadas->ced_Juridica}}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Número de convenio<br></label>
                                <input name="Num_Convenio" type="int" value="{{$asadas->Num_Convenio}}" class="form-control">
                            </div>
                        </div>
                            <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Cantidad de abonados<br></label>
                                <input name="Cant_Abonados" type="int" value="{{$asadas->Cant_Abonados}}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                        </div>


                         <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Número de sección<br></label>
                                <input name="Num_Sesion" type="int"value="{{$asadas->Num_Sesion}}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Presidente<br></label>
                                <input name="Presidente" type="text" value="{{$asadas->Presidente}}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Vicepresidente<br></label>
                                <input name="VicePresidente" type="text" value="{{$asadas->VicePresidente}}" class="form-control">
                            </div>
                        </div>

                         <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Tesorero<br></label>
                                <input name="Tesorero" type="text" value="{{$asadas->Tesorero}}" class="form-control">
                            </div>
                        </div>

                         <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Vocal 1<br></label>
                                <input name="Vocal_1" type="text" value="{{$asadas->Vocal_1}}" class="form-control">
                            </div>
                        </div>

                         <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Vocal 2<br></label>
                                <input name="Vocal_2" type="text" value="{{$asadas->Vocal_2}}" class="form-control">
                            </div>
                        </div>

                         <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Fiscal<br></label>
                                <input name="Fiscal" type="text" value="{{$asadas->Fiscal}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Region<br></label>
                                <input name="Region" type="text" value="{{$asadas->nombreRegion}}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Razón de afiliación<br></label>
                                <textarea class="form-control" id="message" name="Razon_Afiliacion" rows="4">{{$asadas->Razon_Afiliacion}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Teléfono<br></label>
                                <input id="phone" name="Telefono" type="int" value="{{$asadas->Telefono}}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Correo<br></label>
                                <input id="email" name="Correo" type="email" value="{{$asadas->Correo}}" class="form-control">
                                <br>
                            </div>

                            <div class="col-sm-12 col-xs-12" align="center">
                             <button class="btn btn-warning border rounded">Actualizar</button>
                             <a href="{{route('buscaras')}}" class="btn btn-success border rounded">Regresar</a>
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