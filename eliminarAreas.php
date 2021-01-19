<?php
include("C:/xampp/htdocs/itch/conexion/conexion.php");

if(isset($_GET['eliminar'])){
$eliminar_id=$_GET['eliminar'];
$borrar="DELETE FROM area
WHERE idArea='$eliminar_id'";
$ejecutar=sqlsrv_query($conn, $borrar);
if($ejecutar){
    echo "Registro eliminado";
}
else{ die(print_r(sqlsrv_errors(),true));}
}

echo"<br/><br/>";
echo "<a href='consultaAreas.php'>Otra consulta</a>";
?>