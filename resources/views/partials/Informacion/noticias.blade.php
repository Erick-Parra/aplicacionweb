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
$link = new PDO('mysql:host=localhost;dbname=gest_lca', 'root', 'rootvivi'); 
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
			<a href="{{route('pub.leer', $jb)}}" class="btn btn-primary border rounded" >Leer</a> 
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
</div>
<br><br><br><br>
</html>