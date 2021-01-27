<?php
include("conexion.php");

if(isset($_GET['eliminar'])){
$eliminar_id=$_GET['eliminar'];

$borrar="DELETE FROM departamentos
WHERE idDepartamento='$eliminar_id'";

$ejecutar=sqlsrv_query($conn, $borrar);
if($ejecutar){
    echo "Registro eliminado";
}
else{
    die(print_r(sqlsrv_errors(),true));
}

}

echo"<br/><br/>";
echo "<a href='consultaDepartamentos.php'>Otra consulta</a>";
?>