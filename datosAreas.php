<?php
include("C:/xampp/htdocs/itch/conexion/conexion.php");

$area=$_POST['area'];
$idDepartamento=$_POST['idDepartamento'];

$insertar="INSERT INTO areas(area, idDepartamento)VALUES
('$area', '$idDepartamento')";

$ejecutar=sqlsrv_query($conn, $insertar);
if($ejecutar){
    echo"Insertado correctamente";
}else{
    die(print_r(sqlsrv_errors(),true));
}
echo "<br/><br/>";
echo "<a href='ingresarAreas.php'>Ingrese otra Área</a>";
?>