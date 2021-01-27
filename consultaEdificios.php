<?php
include("conexion.php");

$consulta="SELECT * FROM edificios";
$ejecutar=sqlsrv_query($conn, $consulta);
echo"<h2>Edificios</h2>";
echo"<h3>Consulta, Edición y Eliminacion de Edificios</h3>";

echo"<table border='1'> <tr>
<td>Id</td>
<td>Nomenclatura</td>
<td>Ubicacion</td>
</tr>";

while($fila=sqlsrv_fetch_array($ejecutar)){
    $id=$fila['idEdificio'];
    echo"<tr>";
    echo"<td>".$fila['idEdificio']."</td>";
    echo"<td>".$fila['nomenclatura']."</td>";
    echo"<td>".$fila['ubicacion']."</td>";
    echo"<td><a href='editarEdificio.php?editar=$id'>Editar</a></td>";
    echo"<td><a href='eliminarEdificio.php?eliminar=$id'>Eliminar</a></td>";
    "</tr>";
}

    echo"</table>";
    echo"<br/><br/>";
    echo"<a href='ingresarEdificio.php'>Ingresar otro edificio</a>";

?>