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
         <b> <legend class="text-center header">Unidades de servicios de desarrollo
         (USEDES)</legend>
         <legend class="text-center header">Bitácora Control Operativo</legend></b>

         <div class="form-group row">


          <span class="col-md-2 col-md-offset-2 text-center"></span>

          <div class="col-md-8">
            <label>
              Nombre de la ASADA<br></label>

              <select name="Nom_Asada" id="idAsada" class="form-control">
                 <option value="">Seleccione la Asada</option>
                @foreach ($categorias as $categoria)
                <option value="{{$categoria['Nom_Asada']}}">{{$categoria['Nom_Asada']}}</option>
                @endforeach
              </select>                 
            </div>
          </div>
          <div class="form-group row">
            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
            <div class="col-md-8">
              <label>
                Fecha Control<br></label>
                <input name="Fecha Control" value="{{ old('Fecha_Control')}}" type="date" class="form-control {{ $errors->has('Fecha_Control')?'is-invalid':''}} ">
                {!! $errors->first('Fecha_Control','<div class="invalid-feedback">Campo fecha requerido</div>')!!}
              </div>
            </div>

            <div class="form-group row">
              <span class="col-md-2 col-md-offset-2 text-center"></i></span>
              <div class="col-md-8">
                <label>
                  Encargado<br></label>
                  <input style="display: table-column text-align: center" name="Encargado" value="{{ old('Encargado')}}" type="text" placeholder="Nombre del Encargado" class="form-control {{ $errors->has('Encargado')?'is-invalid':''}} ">
                  {!! $errors->first('Encargado','<div class="invalid-feedback">Campo encargado requerido</div>')!!}
                </div>
              </div>

              <div class="form-group row">
                <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                <div class="col-md-8">
                  <label>
                    Ubicación/acueducto<br></label>
                    <input name="Ubicacion" value="{{ old('Ubicacion')}}"type="text" placeholder="Digite Ubicación/acueducto" class="form-control {{ $errors->has('Ubicacion')?'is-invalid':''}} ">
                    {!! $errors->first('Ubicacion','<div class="invalid-feedback">Campo ubicación requerido</div>')!!}
                  </div>
                </div>
                <b><legend class="text-center header">Detalles de resultado del monitoreo</legend></b>
                <div class="form-group row">
                  <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                  <div class="col-md-8">
                    <label>
                      Turbiedad<br></label>
                        <input name="Turbiedad" value="{{ old('Turbiedad')}}"type="text" placeholder="Ingrese rango alerta:1 max.admisible: 5 " class="form-control {{ $errors->has('Turbiedad')?'is-invalid':''}} ">
                      {!! $errors->first('Turbiedad','<div class="invalid-feedback">Campo turbiedad requerido</div>')!!}
                    </div>
                  </div>

                  <div class="form-group row">
                    <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                    <div class="col-md-8">
                      <label>
                        Olor<br></label>                 
                        <select name="Olor" class="form-control">
                          <option value="">Seleccione--</option>
                          <option value="Aceptable">Aceptable</option>
                          <option value="No Aceptable">No Aceptable</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                      <div class="col-md-8">
                        <label>
                          Cloro residual<br></label>
                          <input name="Cloro" value="{{ old('Cloro')}}" type="text" placeholder="Ingrese rango 0,3 A 0,6" class="form-control {{ $errors->has('Cloro')?'is-invalid':''}} ">
                          {!! $errors->first('Cloro','<div class="invalid-feedback">Campo cloro requerido</div>')!!}
                        </div>
                      </div>

                      <div class="form-group row">
                        <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                        <div class="col-md-8">
                          <label>
                            PH<br></label>
                            <input name="PH"  value="{{ old('PH')}}"type="text" placeholder="Ingrese rango 0,6 A 8,0" class="form-control {{ $errors->has('PH')?'is-invalid':''}} ">
                            {!! $errors->first('PH','<div class="invalid-feedback">Campo PH requerido</div>')!!}
                          </div>
                        </div>

                        <div class="form-group row">
                          <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                          <div class="col-md-8">
                            <label>
                              Sabor<br></label>
                              <select name="Sabor" class="form-control">
                                 <option value="">Seleccione--</option>
                                <option value="Aceptable">Aceptable</option>
                                <option value="No Aceptable">No Aceptable</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                            <div class="col-md-8">
                              <label>
                                Temperatura<br></label>
                                <input name="Temperatura" value="{{ old('Temperatura')}}"type="text" placeholder="NO aplica" class="form-control {{ $errors->has('Temperatura')?'is-invalid':''}} ">
                                {!! $errors->first('Temperatura','<div class="invalid-feedback">Campo temperatura requerido</div>')!!}
                              </div>
                            </div>
                            <div class="form-group row">
                              <span class="col-md-2 col-md-offset-2 text-center"></i></span>
                              <div class="col-md-8">
                                <label>
                                  Observaciones<br></label>
                                  <textarea class="form-control {{ $errors->has('Observacion')?'is-invalid':''}} " id="message" name="Observacion" value="{{ old('Observacion')}}"placeholder="Observaciones" rows="4"></textarea>
                                  {!! $errors->first('Observacion','<div class="invalid-feedback">Campo observación requerido</div>')!!}
                                </div>
                              </div>
                              <div class="col-sm-12 col-xs-12" align="center">
                                <button class="btn btn-primary border rounded">REGISTRAR</button>
                              </div>
                              <br>
                              <br>
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



