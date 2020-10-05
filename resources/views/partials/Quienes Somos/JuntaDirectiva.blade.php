@include('partials.nav')

<style type="text/css">

    table, th, td {
        border: 6px solid #003357;
        border-collapse: separate; 
        color: #efeffb;
        background-color: #003357 ;
    }
    th, td{
        padding: 15px;

    }
</style>
   <div class="team-clean" style="background-color: rgb(190,241,241);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="opacity: 0.63;filter: white(0px) brightness(83%);">JUNTA DIRECTIVA DE LA LIGA COMUNAL DEL AGUA</h2>
            </div>
            <?php
// Te recomiendo utilizar esta conexión. 
$link = new PDO('mysql:host=localhost;dbname=gest_lca', 'root', '1234'); 

?>
            <table class= "table table-hover table-dark" style="opacity: 1; border="5" style="margin: 0 auto;">
        <caption>Personas responsables en la Junta Directiva de la LCA</caption>
        <thead class="#003357">
            <tr>

    <th>PUESTO</th>

    <th>ENCARGADO</th>

  </tr>

  <?php foreach ($link->query('SELECT * from junta_directiva') as $mostrar){
    ?> 
<tr>
      <tr>

    <th>PRESIDENTE</th>

    <td><?php echo $mostrar["Presidente"]?></td>

  </tr>
  <tr>

    <th>VICEPRESIDENTE</th>

    <td><?php echo $mostrar["vicePresidente"]?></td>

  </tr>
  <tr>

    <th>SECRETARIO</th>

    <td><?php echo $mostrar["Secretario"]?></td>

  </tr>
  <tr>

    <th>TESORERO</th>

    <td><?php echo $mostrar["Tesorero"]?></td>

  </tr>
  <tr>

    <th>VOCAL</th>

    <td><?php echo $mostrar["Vocal"]?></td>

  </tr>
  <tr>

    <th>SUPLENTE 1</th>

    <td><?php echo $mostrar["Suplente1"]?></td>

  </tr>
  <tr>

    <th>SUPLENTE 2</th>

    <td><?php echo $mostrar["Suplente2"]?></td>

  </tr>
  <tr>

    <th>FISCAL</th>

    <td><?php echo $mostrar["Fiscal"]?></td>
 </tr>
<?php
  }
?>
  </table>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>