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
		<!-- <h1>Editar {{$nota->Nom_Asada}}</h1>-->
		<section class="content">
			<form action="{{ route('notas.update', $nota->idControl) }}" method="POST">
		@method('PUT')
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
								<form class="form-horizontal" method="PUT">
										<fieldset>
											<b><legend class="text-center header">Unidades de servicios de desarrollo
											(USEDES)</legend>
												<legend class="text-center header">Bitacora Control Operativo</legend></b>

												<div class="form-group row">
														
													
														<span class="col-md-2 col-md-offset-2 text-center"></span>
														
														<div class="col-md-8">
														<label>
																Nombre de la ASADA<br></label>
																<input style="display: table-column text-align: center" name="Nom_Asada" type="text" value="{{$nota->Nom_Asada}}"  class="form-control {{ $errors->has('Nom_Asada')?'is-invalid':''}} ">
                                 {!! $errors->first('Nom_Asada','<div class="invalid-feedback">Campo nombre requerido</div>')!!}
				
														</div>
												</div>
												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
												</div>

												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																Encargado<br></label>
																<input style="display: table-column text-align: center" name="Encargado" type="text" value="{{$nota->Encargado}}" class="form-control {{ $errors->has('Encargado')?'is-invalid':''}} ">
                                 {!! $errors->first('Encargado','<div class="invalid-feedback">Campo encargado requerido</div>')!!}
														</div>
												</div>

												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																Ubicación/acueducto<br></label>
																<input name="Ubicacion" type="text" value="{{$nota->Ubicacion}}" class="form-control {{ $errors->has('Ubicacion')?'is-invalid':''}} ">
                                 {!! $errors->first('Ubicacion','<div class="invalid-feedback">Campo ubicacion requerido</div>')!!}
														</div>
												</div>
												<b><legend class="text-center header">Detalles de resultado del monitoreo</legend></b>
														<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																Turbiedad<br></label>
																<input name="Turbiedad" type="text" value="{{$nota->Turbiedad}}" class="form-control {{ $errors->has('Turbiedad')?'is-invalid':''}} ">
                                 {!! $errors->first('Turbiedad','<div class="invalid-feedback">Campo turbiedad requerido</div>')!!}
														</div>
												</div>

												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																Olor<br></label>
																<input name="Olor" type="text"  value="{{$nota->Olor}}" class="form-control {{ $errors->has('Olor')?'is-invalid':''}} ">
                                 {!! $errors->first('Olor','<div class="invalid-feedback">Campo olor requerido</div>')!!}
														</div>
												</div>
												 <div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																Cloro residual<br></label>
																<input name="Cloro" type="text"  value="{{$nota->Cloro}}" class="form-control {{ $errors->has('Cloro')?'is-invalid':''}} ">
                                 {!! $errors->first('Cloro','<div class="invalid-feedback">Campo cloro requerido</div>')!!}
														</div>
												</div>

												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																PH<br></label>
																<input name="PH" type="text" value="{{$nota->PH}}" class="form-control {{ $errors->has('PH')?'is-invalid':''}} ">
                                 {!! $errors->first('PH','<div class="invalid-feedback">Campo PH requerido</div>')!!}
														</div>
												</div>

												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																Sabor<br></label>
																<input name="Sabor" type="text"  value="{{$nota->Sabor}}" class="form-control {{ $errors->has('Sabor')?'is-invalid':''}} ">
                                 {!! $errors->first('Sabor','<div class="invalid-feedback">Campo sabor requerido</div>')!!}
														</div>
												</div>

												 <div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																Temperatura<br></label>
																<input name="Temperatura" type="text"  value="{{$nota->Temperatura}}"  class="form-control {{ $errors->has('Temperatura')?'is-invalid':''}} ">
                                 {!! $errors->first('Temperatura','<div class="invalid-feedback">Campo temperatura requerido</div>')!!}
														</div>
												</div>
												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																Observaciones<br></label>
																<input textarea class="form-control {{ $errors->has('Observacion')?'is-invalid':''}} "id="message" name="Observacion"rows="4" value="{{$nota->Observacion}}"></textarea>
																 {!! $errors->first('Observacion','<div class="invalid-feedback">Campo observacion requerido</div>')!!}
														</div>
												</div>
														<div class="col-sm-12 col-xs-12" align="center">
														 <button class="btn btn-primary border rounded" type="submit">Actualizar</button>
														 <a href="{{route('search')}}" class="btn btn-success border rounded">Regresar</a>
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