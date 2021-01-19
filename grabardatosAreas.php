<?php
include("C:/xampp/htdocs/itch/conexion/conexion.php");

$area=$_POST['area'];
$idDepartamento=$_POST['idDepartamento'];
$idArea=$_POST['idArea'];

$solicitud="UPDATE areas SET area='$area', 
idDepartamento='$idDepartamento' WHERE idArea='$idArea'";
$resultado=sqlsrv_query($conn, $solicitud);

if(!$resultado){
    echo"Error: No se pudieron actualizar los datos";
}else{
    echo"Se actualizaron los datos con éxito";
}
echo"<br/><br/>";
echo"<a href='consultaAreas.php'>Consulta Areas</a>";
?>