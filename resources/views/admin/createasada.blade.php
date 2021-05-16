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
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="{{ route('admin') }}">Regresar al inicio</a></li>
                  <li class="breadcrumb-item active">Administración Liga Comunal del Agua</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Main content -->
    <section class="content">
      <form method="POST" action="{{ route('create.store')}}">
        @csrf
        <div class="container">
          <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
            @endforeach
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="well well-sm">
                <form class="form-horizontal" method="post">
                  <fieldset>
                    <b>
                      <legend class="text-center header">Módulo de registro de ASADAS</legend>
                    </b>
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Asada a solicitar</h4><br>
                        <div class="card-content">
                          <div class="card-body">
                            <div class="form-group row">
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <div class="controls">
                                    <label for="Nom_Asada">
                                      Nombre de la ASADA<br></label>
                                    <div class="custom-file">
                                      <input name="Nom_Asada" value="{{ old('Nom_Asada')}}" type="text" placeholder="Ingrese el nombre de la ASADA" class="form-control {{ $errors->has('Nom_Asada')?'is-invalid':''}}  ">
                                      {!! $errors->first('Nom_Asada','<div class="invalid-feedback">Campo nombre requerido</div>')!!}
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <div class="controls">
                                    <label for="Region">Cantón</label>
                                    <div class="custom-file">
                                      <select name="Region" class="form-control">
                                        <option value="">Seleccione el cantón--</option>
                                        <option value="Hojancha">Hojancha</option>
                                        <option value="Nicoya">Nicoya</option>
                                        <option value="Nandayure">Nandayure</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <div class="controls">
                                    <label for="ced_Juridica">
                                      Número de cédula jurídica</label>
                                    <div class="custom-file">
                                      <input name="ced_Juridica" pattern="^[3]{1}[\-][0-9]{3}[\-][0-9]{6}"
                                      title="3-###-######"
                                      value="{{old('ced_Juridica')}}" type="int"
                                       placeholder="3-###-######"
                                        class="form-control {{ $errors->has('ced_Juridica')?'is-invalid':''}}  ">
                                      {!! $errors->first('ced_Juridica','<div class="invalid-feedback">Campo cédula jurídica requerido</div>')!!}
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <div class="controls">
                                    <label for="Cant_Abonados">
                                      Cantidad de abonados</label>
                                    <div class="custom-file">
                                      <select name="Cant_Abonados" class="form-control">
                                        <option value="">Seleccione Rango--</option>
                                        <option value="10-50">10-50</option>
                                        <option value="51-150">51-150</option>
                                        <option value="151-300">151-300</option>
                                        <option value="301-700">301-700</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <div class="controls">
                                    <label for="Telefono">
                                      Teléfono</label>
                                    <div class="custom-file">
                                      <input id="phone" name="Telefono" value="{{ old('Telefono')}}" type="int" placeholder="Ingrese el número de teléfono" class="form-control {{ $errors->has('Telefono')?'is-invalid':''}} ">
                                      {!! $errors->first('Telefono','<div class="invalid-feedback">Campo telefono requerido</div>')!!}
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <div class="controls">
                                    <label for="Correo">
                                      Correo</label>
                                    <div class="custom-file">
                                      <input id="email" name="Correo" value="{{ old('Correo')}}" type="email" placeholder="Ingrese el correo electrónico" class="form-control {{ $errors->has('Correo')?'is-invalid':''}} ">
                                      {!! $errors->first('Correo','<div class="invalid-feedback">Campo correo requerido</div>')!!}
                                      <br>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="form-group">
                                  <div class="controls">
                                    <label for="Razon_Afiliacion">
                                      Razón de afiliación</label>
                                    <div class="custom-file">
                                      <textarea class="form-control {{ $errors->has('Razon_Afiliacion')?'is-invalid':''}} " id="message" name="Razon_Afiliacion" value="{{ old('Razon_Afiliacion')}}" placeholder="Explique la razón de su a afiliación" rows="4"></textarea>
                                      {!! $errors->first('Razon_Afiliacion','<div class="invalid-feedback">Campo razon afiliacion requerido</div>')!!}
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Datos de Fechas</h4><br>
                          <div class="card-content">
                            <div class="card-body">
                              <div class="form-group row">
                                <div class="col-sm-4">
                                  <div class="form-group">
                                    <div class="controls">
                                      <div class="col-sm-12">
                                        <label>
                                          Fecha de solicitud</label>
                                        <div class="custom-file">
                                          <input name="Fecha_Solicitud" value="{{ old('Fecha_Solicitud')}}" type="date" class="form-control {{ $errors->has('Fecha_Solicitud')?'is-invalid':''}} ">
                                          {!! $errors->first('Fecha_Solicitud','<div class="invalid-feedback">Campo fecha requerido</div>')!!}
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                    <div class="controls">
                                        <label>
                                          Número de convenio</label>
                                        <div class="custom-file">
                                          <input name="Num_Convenio" value="{{ old('Num_Convenio')}}" type="int" placeholder="Ingrese el número de convenio" class="form-control {{ $errors->has('Num_Convenio')?'is-invalid':''}}  ">
                                          {!! $errors->first('Num_Convenio','<div class="invalid-feedback">Campo número convenio requerido</div>')!!}
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                    <div class="controls">
                                        <label>
                                          Número de sección</label>
                                        <div class="custom-file">
                                          <input name="Num_Sesion" value="{{ old('Num_Sesion')}}" type="int" placeholder="Ingrese el número de sección" class="form-control {{ $errors->has('Num_Sesion')?'is-invalid':''}} ">
                                          {!! $errors->first('Num_Sesion','<div class="invalid-feedback">Campo número sección requerido</div>')!!}
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                    <div class="controls">
                                        <label>
                                          Fecha de registro</label>
                                        <div class="custom-file">
                                          <input name="Fecha_Registro" value="{{ old('Fecha_Registro')}}" type="date" class="form-control {{ $errors->has('Fecha_Registro')?'is-invalid':''}}">
                                          {!! $errors->first('Fecha_Registro','<div class="invalid-feedback">Campo fecha requerido</div>')!!}
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Junta Directiva</h4><br>
                          <div class="card-content">
                            <div class="card-body">
                              <div class="form-group row">
                                <div class="col-sm-3">
                                  <div class="controls">
                                    <div class="col-sm-12">
                                      <label>
                                        Presidente</label>
                                      <input name="Presidente" value="{{ old('Presidente')}}" type="text" placeholder="Ingrese nombre presidente" class="form-control {{ $errors->has('Presidente')?'is-invalid':''}} ">
                                      {!! $errors->first('Presidente','<div class="invalid-feedback">Campo presidente requerido</div>')!!}
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                      <label>
                                        VicePresidente</label>
                                      <input name="VicePresidente" value="{{ old('VicePresidente')}}" type="text" placeholder="Ingrese nombre VicePresidente" class="form-control {{ $errors->has('VicePresidente')?'is-invalid':''}} ">
                                      {!! $errors->first('Vicepresidente','<div class="invalid-feedback">Campo VicePresidente requerido</div>')!!}
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="form-group row">
                                    <div class="col-md-12">
                                      <label>
                                        Tesorero</label>
                                      <input name="Tesorero" value="{{ old('Tesorero')}}" type="text" placeholder="Ingrese nombre tesorero" class="form-control {{ $errors->has('Tesorero')?'is-invalid':''}} ">
                                      {!! $errors->first('Tesorero','<div class="invalid-feedback">Campo tesorero requerido</div>')!!}
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <div class="controls">
                                      <label>Vocal 1</label>
                                      <input name="Vocal_1" value="{{ old('Vocal_1')}}" type="text" placeholder="Ingrese el nombre del vocal 1" class="form-control {{ $errors->has('Vocal_1')?'is-invalid':''}} ">
                                      {!! $errors->first('Vocal_1','<div class="invalid-feedback">Campo vocal 1 requerido</div>')!!}
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <div class="controls">
                                      <label>Vocal 2</label>
                                      <input name="Vocal_2" value="{{ old('Vocal_2')}}" type="text" placeholder="Ingrese el nombre del vocal 2" class="form-control {{ $errors->has('Vocal_2')?'is-invalid':''}} ">
                                      {!! $errors->first('Vocal_1','<div class="invalid-feedback">Campo vocal 2 requerido</div>')!!}
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <div class="controls">
                                      <label>Fiscal</label>
                                      <input name="Fiscal" value="{{ old('Fiscal')}}" type="text" placeholder="Ingrese el nombre del fiscal" class="form-control {{ $errors->has('Fiscal')?'is-invalid':''}} ">
                                      {!! $errors->first('Fiscal','<div class="invalid-feedback">Campo fiscal requerido</div>')!!}
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="form-group row">
                                    <div class="col-md-12">
                                      <label>
                                        Fontanero</label>
                                      <input name="Fontanero" value="{{ old('Fontanero')}}" type="text" placeholder="Ingrese el Fontanero" class="form-control {{ $errors->has('Fontanero')?'is-invalid':''}} ">
                                      {!! $errors->first('Fontanero','<div class="invalid-feedback">Campo fontanero requerido</div>')!!}
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xs-12" align="center">
            <button class="btn btn-primary border rounded">REGISTRAR</button>
          </div>
          <br>
        </div>
  </div>
  </div>
  </div>
  </form>
  <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Created By</b> NEPV
      </div>
      <strong>Copyright &copy; 2020.</strong> All rights
      reserved.
    </footer>
  </section>
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