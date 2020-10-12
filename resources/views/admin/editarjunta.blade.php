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
			<form action="{{ route('update', $nota->id) }}" method="POST">
		@method('PUT')
		@csrf
<div class="container">
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
											<b><legend class="text-center header">JUNTA DIRECTIVA</legend></b>

												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
												</div>


												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																Nombre<br></label>
																<input name="Nombre" type="text" class="form-control {{ $errors->has('Nombre')?'is-invalid':''}}" value="{{$nota->Nombre}}">
																 {!! $errors->first('Nombre','<div class="invalid-feedback">Campo nombre requerido</div>')!!}
														</div>
												</div>
												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																Puesto<br></label>
																<input name="Puesto" type="text" class="form-control {{ $errors->has('Puesto')?'is-invalid':''}}" value="{{$nota->Puesto}}">
																 {!! $errors->first('Puesto','<div class="invalid-feedback">Campo puesto requerido</div>')!!}
														</div>
												</div>
												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																Asada<br></label>
																<input name="Asada" type="text" class="form-control {{ $errors->has('Asada')?'is-invalid':''}}" value="{{$nota->Asada}}">
																 {!! $errors->first('Asada','<div class="invalid-feedback">Campo asada requerido</div>')!!}
														</div>
												</div>

													<div class="col-sm-12 col-xs-12" align="center">
														 <button class="btn btn-primary border rounded" type="submit">Actualizar</button>
														 	 <a href="{{route('buscarjunta')}}" class="btn btn-success border rounded">Regresar</a>
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