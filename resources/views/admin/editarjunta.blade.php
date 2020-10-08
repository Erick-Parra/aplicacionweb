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
														
													
														<span class="col-md-2 col-md-offset-2 text-center"></span>
														
														<div class="col-md-8">
														<label>
																Presidente<br></label>
																<input style="display: table-column text-align: center" name="Presidente" type="text"  class="form-control  {{ $errors->has('Presidente')?'is-invalid':''}} " value="{{$nota->Presidente}}">
																 {!! $errors->first('Presidente','<div class="invalid-feedback">Campo presidente requerido</div>')!!}

				
														</div>
												</div>
												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
												</div>

												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																vicePresidente<br></label>
																<input style="display: table-column text-align: center" name="vicePresidente" type="text" class="form-control  {{ $errors->has('vicePresidente')?'is-invalid':''}} "
																value="{{$nota->vicePresidente}}">
																 {!! $errors->first('vicepresidente','<div class="invalid-feedback">Campo  vicepresidente requerido</div>')!!}
														</div>
												</div>

												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																Secretario<br></label>
																<input name="Secretario" type="text" class="form-control {{ $errors->has('Secretario')?'is-invalid':''}}" value="{{$nota->Secretario}}">
																 {!! $errors->first('Secretario','<div class="invalid-feedback">Campo secretario requerido</div>')!!}
														</div>
												</div>
												<div class="form-group row">
														
													
														<span class="col-md-2 col-md-offset-2 text-center"></span>
														
														<div class="col-md-8">
														<label>
																Tesorero<br></label>
																<input style="display: table-column text-align: center" name="Tesorero" type="text"  class="form-control  {{ $errors->has('Tesorero')?'is-invalid':''}}" value="{{$nota->Tesorero}}">
																 {!! $errors->first('Tesorero','<div class="invalid-feedback">Campo tesorero requerido</div>')!!}
				
														</div>
												</div>

												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																Vocal<br></label>
																<input name="Vocal" type="text" class="form-control {{ $errors->has('Vocal')?'is-invalid':''}}" value="{{$nota->Vocal}}">
																 {!! $errors->first('Vocal','<div class="invalid-feedback">Campo vocal requerido</div>')!!}
														</div>
												</div>
												 <div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																Suplente1<br></label>
																<input name="Suplente1" type="text" class="form-control {{ $errors->has('Suplente1')?'is-invalid':''}}" value="{{$nota->Suplente1}}">
																 {!! $errors->first('Suplente1','<div class="invalid-feedback">Campo suplente 1 requerido</div>')!!}
														</div>
												</div>

												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																Suplente2<br></label>
																<input name="Suplente2" type="text" class="form-control {{ $errors->has('Suplente2')?'is-invalid':''}}" value="{{$nota->Suplente2}}">
																 {!! $errors->first('Suplente2','<div class="invalid-feedback">Campo suplente 2 requerido</div>')!!}
														</div>
												</div>

												<div class="form-group row">
														<span class="col-md-2 col-md-offset-2 text-center"></i></span>
														<div class="col-md-8">
															<label>
																Fiscal<br></label>
																<input name="Fiscal" type="text" class="form-control {{ $errors->has('Fiscal')?'is-invalid':''}}" value="{{$nota->Fiscal}}">
																 {!! $errors->first('Fiscal','<div class="invalid-feedback">Campo fiscal requerido</div>')!!}
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