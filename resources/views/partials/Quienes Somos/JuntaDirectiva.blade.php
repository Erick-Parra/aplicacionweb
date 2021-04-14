@include('partials.nav')
<!DOCTYPE html>
<html lang="es">
<head>
<?xml version="1.0" encoding="UTF-8"?>
<meta charset="utf-8">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<style type="text/css">

    table, th, td {
        border: 6px solid #7eeefa;
        border-collapse: separate;
        color: #003357;
        background-color: #7eeefa;
    }
    th, td{
        padding: 15px;

    }
</style>
<body>
   <div class="team-clean" style="background-color: #7eeefa;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="opacity: 0.63;filter: white(0px) brightness(83%);">JUNTA DIRECTIVA DE LA LIGA COMUNAL DEL AGUA</h2>
            </div>
            <?php
// Te recomiendo utilizar esta conexión.
$link = new PDO('mysql:host=localhost;dbname=gest_lca;charset=utf8', 'usuario', 'password');

?>
            <table class= "table" style="background-color: #003357; opacity: 1; border="5" style="margin: 0 auto;">
        <caption>Personas responsables en la Junta Directiva de la LCA</caption>
        <thead class="#003357">
             <tr>

     </th>

       <th scope="col">Nombre</th>

       <th scope="col">Puesto</th>

      <th scope="col">Asada</th>

  </tr>

  <?php foreach ($link->query('SELECT * from junta_directiva') as $mostrar){

    ?>
<tr>


    <td><?php echo $mostrar["Nombre"]?></td>

    <td><?php echo $mostrar["Puesto"]?></td>

    <td><?php echo $mostrar["Asada"]?></td>


  </tr>
<?php
  }
?>  </table>
        </div>
    </div>
    </body>
  </thead>
</table>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    </html>