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
                <button class="btn btn-primary shadow btn-block border rounded" role="button" style="color: rgba(243,246,248,0.99); background-color: rgb(15,112,183);">Enviar</button></form>
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