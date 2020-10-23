@include('partials.nav')
<?php
require '../php/Funciones.php';
$obj = new Funciones();

$posts = $obj->getposts();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Publicaciones</title>
	<meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap-theme.min.css">
</head>


<style type="text/css">

    table, th, td {
        background-color: rgb(190,241,241);
    }
    th, td{
        padding: 15px;

    }
</style>

<?php
// Te recomiendo utilizar esta conexión.
$link = new PDO('mysql:host=localhost;dbname=gest_lca;charset=utf8', 'root', 'root');
?>

<div class="container">
<div class="row">
<div class="col-md-12">
<h1>Noticias</h1>

<div class="panel panel-info">
<div class="panel-heading">Publicaciones</div>
<div class="panel-body">

<table class="table table-responsive">
<?php foreach ($link->query('SELECT * from posts') as $jb){
    ?>
	<tr>
		<td style="width: 200px;">

	    </td>
		<td>
			<img src="{{ Storage::url ($jb['imagen'])}}" class="img-responsive" style="width: 200px; ">
			<h4><?php echo $jb["TituloNoti"] ?></h4>
			<p><?php echo $jb["InfoNoti"] ?></p>
		</td>
	</tr>
<?php
  }
?>
</table>

</div>
</div>

</div>
</div>

<body>
	<div class="team-clean" style="background-color: rgb(190,241,241);">
	<div class="container">
		<h2 style="color: #003357; padding: 30px">NOTICIAS</h2>
		<div class="row">
			<?php foreach ($posts as $publicacion): ?>
				<div class="col-lg-4 col-md-4">
					<img src="{{ Storage::url ($publicacion['imagen'])}}" class="img-responsive" style="width: 200px; ">
					<h3 style="color:#003357; padding: 30px"><?php echo $publicacion['TituloNoti']; ?></h3>
					<a href="post.php?blog_id=<?php echo $publicacion['Id']; ?>" style="color: #003357; padding: 30px">VER MÁS</a>
				</div>
			<?php endforeach; ?>
		</div>

 <form method="POST" action="{{ route('news')}}">
    @csrf
<div class="flash-message" style="background-color: #5DADE2;">
 @foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has('alert-' . $msg))

  <p class="border rounded alert alert-primary-{{ $msg }}" style="color: rgba(243,246,248,0.99); size: 15px;">{{ Session::get('alert-' . $msg) }} <a href="{{ route('news')}}" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
  @endif
 @endforeach

 </div> <!-- end .flash-message -->

    <div class="row">
        <div class="col-md-12">
            <br>
            <h2 class="text-center text-info" style="color: rgba(243,246,248,0.99); ">COMENTARIOS</h2>

            <form method="POST" action="{{ route('news')}}">
           @csrf
        </div>


<div class="panel panel-default">
<div class="panel-heading" style="color:#5DADE2">Escribir comentario</div>
<div class="panel-body">

<form method="post" action="./?action=send" enctype="multipart/form-data">
<input type="hidden" name="post_id">
  <div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" name="name" class="form-control" id="Nombre" placeholder="Nombre" required>
  </div>


  <div class="form-group">
    <label for="InputEmail1">Correo electrónico</label>
    <input type="email" name="email" required class="form-control" id="InputEmail1" placeholder="Correo electronico">
  </div>


  <div class="form-group">
    <label for="InputComentarios">Comentario</label>
    <textarea name="comment" class="form-control" id="InputComentarios" placeholder="Comentarios" required rows="3"></textarea>
  </div>
  <div class="col-sm-12 col-xs-12" align="center">
    <button class="btn btn-primary border rounded" role="button" style="color: rgba(243,246,248,0.99); background-color: rgb(15,112,183);">Enviar Comentario</button>
  </div>
        </form>

        <div class="col-12 col-sm-6 col-md-6 shadow rounded py-3 site-form" style="background-color: #d7f5f5;">
            <form style="background-color: #FF0000;">
                <div class="form-group">

                    <input type="text" class="form-control bg-light shadow-sm @error('firstname') is-invalid @else border-0 @enderror" id="firstname" name="firstname" placeholder="Nombre"
                    value="{{ old('firstname')}}">
                    @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong><small style="font-size: 12px;">Campo nombre requerido.</small></strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="text" class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" id="email"
                    name="email" placeholder="Email" value="{{ old('email')}}">

                         @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong><small style="font-size: 12px;">Campo email requerido.</small></strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea class="form-control bg-light shadow-sm @error('messages') is-invalid @else border-0 @enderror" name="messages"
                    placeholder="Comentario" rows="2">{{ old('messages')}}</textarea>

                      @error('messages')
                    <span class="invalid-feedback" role="alert">
                        <strong><small style="font-size: 12px;">Realice su comentario.</small></strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm-12 col-xs-12" align="center">
                <button class="btn btn-primary shadow btn-block border rounded" role="button" style="color: rgba(243,246,248,0.99); background-color: rgb(15,112,183);">Enviar Comentario</button></form>
                <br>
        </div>
    </form>

        <div class="clearfix"></div>
	</div>
	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</div>
</body>
</html>