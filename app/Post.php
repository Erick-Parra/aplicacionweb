<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\TblMapeo;

class Post extends Model
{
    //

    // Comprobamos si ha ocurrido un error.
if ( !isset($_FILES["Archivo_SHP"]) || $_FILES["Archivo_SHP"]["error"] > 0){
echo "Ha ocurrido un error.";
} else {
// Verificar si el tipo de archivo es un tipo de imagen permitido.
// y que el tamano del archivo no exceda los 16MB
$permitidos = array("Archivo_SHP/jpg", "Archivo_SHP/jpeg", "Archivo_SHP/gif", "Archivo_SHP/png");
$limite_kb = 16384;

if (in_array($_FILES['Archivo_SHP']['type'], $permitidos) && $_FILES['Archivo_SHP']['size'] <= $limite_kb * 1024){
$imagen_temporal = $_FILES['Archivo_SHP']['tmp_name'];
// Este es el tipo de archivo:
$tipo = $_FILES['Archivo_SHP']['type'];
// Leer el archivo temporal en binario.
$fp = fopen($imagen_temporal, 'r+b');
$data = fread($fp, filesize($imagen_temporal));
fclose($fp);
// Escapar los caracteres.
// $data = mysql_escape_string($data);
$data = mysql_real_escape_string($data);

$resultado = mysql_query("INSERT INTO dibujos (Archivo_SHP) VALUES ('$data', '$tipo')") ;

if ($resultado){
echo "Archivo guardado en la base de datos, su id es ";
echo mysql_insert_id();
} else {
echo "Error al copiar el archivo.";
}
} else {
echo "Archivo no permitido, es un tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes.";
}
}
?>
