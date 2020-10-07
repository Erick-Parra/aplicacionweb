@include('partials.nav')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<?php
// Te recomiendo utilizar esta conexión. 
$link = new PDO('mysql:host=localhost;dbname=gest_lca', 'root', 'rootvivi'); 
?>

<div class="container">
<div class="row">
<div class="col-md-12">
<br><div class="panel panel-default">
<div class="panel-body">
 
 
<?php foreach ($link->query('SELECT * from posts') as $jb){
    ?> 
  <tr>
    <td style="width: 200px;">
    
      </td>
    <td>
      <img src="{{ Storage::url ($jb['imagen'])}}" class="img-responsive" style="width: 200px; ">
      <br><br>

      <label>Titulo Noticia</label>
      <h4><?php echo $jb["TituloNoti"] ?></h4>
      <label>Contenido</label>
      <p><?php echo $jb["InfoNoti"] ?></p>

      <br><br>
      
    </td>
  </tr>
<?php
  }
?>


</div>
</div>


<br><br><br><br>

<div class="panel panel-default">
<div class="panel-heading">Escribir comentario</div>
<div class="panel-body">

<form method="post" action="./?action=send" enctype="multipart/form-data">
<input type="hidden" name="post_id">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nombre" required>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Correo electronico</label>
    <input type="email" name="email" required class="form-control" id="exampleInputEmail1" placeholder="Correo electronico">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Comentarios</label>
    <textarea name="comment" class="form-control" id="exampleInputEmail1" placeholder="Comentarios" required rows="3"></textarea>
  </div>



  <div class="checkbox">
    <label>
      <input type="checkbox" name="accept" required> Acepto los terminos y condiciones
    </label>
  </div>
  <button type="submit" class="btn btn-primary border rounded">Enviar datos</button>
</form>

</div>
</div>


<div class="panel panel-default">
<div class="panel-heading">Comentarios</div>
<div class="panel-body">


</div>
</div>



</div>
</div>
</div>
<br><br><br><br>

</html>