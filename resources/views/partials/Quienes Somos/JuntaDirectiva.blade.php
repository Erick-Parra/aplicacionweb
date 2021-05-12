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
            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Puesto</th>
                                            <th>Asada</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($asada as $asadas)
                                            <tr>
                                            <td>{{ $asadas->Nombre }}</td>
                                            <td>{{ $asadas->Puesto }}</td>
                                            <td>{{ $asadas->Asada }}</td>
                                            @endforeach
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
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