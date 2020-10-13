@include('partials.nav')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
$link = new PDO('mysql:host=localhost;dbname=gest_lca;charset=utf8', 'root', '1234'); 
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
            @if(session('status'))
            {{ session('status')}}
            @endif
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
        <div class="clearfix"></div>
    </div>

</div>
<br><br><br><br>
</html>