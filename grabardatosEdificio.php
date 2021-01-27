<?php
include("conexion.php");

$departamento=$_POST['departamento'];
$edificio=$_POST['idEdificio'];
$idDepartamento=$_POST['idDepartamento'];

$solicitud="UPDATE departamentos SET departamento='$departamento', 
idEdificio='$edificio' WHERE idDepartamento='$idDepartamento'";

$resultado=sqlsrv_query($conn, $solicitud);

if(!$resultado){
    echo"Error: No se pudieron actualizar los datos";
}else{
    echo"Se actualizaron los datos con éxito";
}
echo"<br/><br/>";
echo"<a href='consultaDepartamentos.php'>Consulta Departamentos</a>";

?>