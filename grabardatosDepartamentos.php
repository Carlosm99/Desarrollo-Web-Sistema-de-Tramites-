<?php
include("conexion.php");

//se crea variables que alojan datos de los input creados en editarDepartamentos
$departamento=$_POST['departamento'];//variable creada name de input
$edificio=$_POST['edificio'];
$idDepartamento=$_POST['idDepartamento'];


//Actualiza los campos de db con variables creadas $departamento, $idDepartamento 
$solicitud="UPDATE departamentos SET departamento='$departamento', 
IdEdificio='$edificio' WHERE idDepartamento='$idDepartamento'";

$resultado=sqlsrv_query($conn, $solicitud);

if(!$resultado){
    echo"Error: No se pudieron actualizar los datos";
}else{
    echo"Se actualizaron los datos con éxito";
}
echo"<br/><br/>";
echo"<a href='consultaDepartamentos.php'>Consulta Departamentos</a>";

?>