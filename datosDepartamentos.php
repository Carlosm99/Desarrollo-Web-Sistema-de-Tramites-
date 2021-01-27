<?php
include("conexion.php");

$departamento=$_POST['departamento'];
$edificio=$_POST['edificio'];

$insertar="INSERT INTO departamentos(departamento, idEdificio)VALUES
('$departamento', '$edificio')";

$ejecutar=sqlsrv_query($conn, $insertar);
if($ejecutar){
    echo"Insertado correctamente";
}else{
    die(print_r(sqlsrv_errors(),true));
}
echo "<br/><br/>";

echo "<a href='ingresarDepartamentos.php'>Ingrese otro Departamento</a>";

?>