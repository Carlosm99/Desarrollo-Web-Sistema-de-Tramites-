<?php
include("conexion.php");

$nomenclatura=$_POST['nomenclatura'];
$ubicacion=$_POST['ubicacion'];

$insertar="INSERT INTO edificios(nomenclatura, ubicacion)VALUES
('$nomenclatura', '$ubicacion')";

$ejecutar=sqlsrv_query($conn, $insertar);
if($ejecutar){
    echo"Insertado correctamente";
}else{
    die(print_r(sqlsrv_errors(),true));
}
echo "<br/><br/>";
echo "<a href='ingresarEdificio.php'>Ingrese otro edificio</a>";
?>