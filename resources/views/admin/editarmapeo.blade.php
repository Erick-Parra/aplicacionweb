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
			<form action="{{ route('mapeos.update', $mapeos->IdMapeo) }}" method="POST">
		@method('PUT')
		@csrf
<div class="container">
		<div class="row">
				<div class="col-md-12">
						<div class="well well-sm">
								<form class="form-horizontal" method="PUT">
										<fieldset>
												<legend class="text-center header">Registro de Mapeo</legend>

												<div class="form-group row">
														<legend class="text-center header">Nombre Asada {{$mapeos->Nom_Asada}}</legend>

												</div>
												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
												</div>

												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																Archivo SHP<br></label>
															<br/>
															 Images/{{ $mapeos->Archivo_SHP}}
															<br/>	
																<input style="display: table-column text-align: center" name="Archivo" type="file" class="form-control"
																value="{{$mapeos->Archivo_SHP}}">
														</div>
												</div>
														<div class="col-sm-12 col-xs-12" align="center">
														 <button class="btn btn-warning border rounded" type="submit">Editar</button>
												</div>
												<a href="{{route('buscarmap')}}">Regresar</a>
												<br>
												  <div class="col-md-8">
                            
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