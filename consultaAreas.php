<?php
include("C:/xampp/htdocs/itch/conexion/conexion.php");

$consulta="SELECT * FROM areas";
$ejecutar=sqlsrv_query($conn, $consulta);
echo"<h2>Áreas</h2>";
echo"<h3>Consulta, Edición y Eliminacion de Áreas</h3>";

echo"<table border='1'> <tr>
<td>Id</td>
<td>Área</td>
<td>idDepartamento</td>
</tr>";

while($fila=sqlsrv_fetch_array($ejecutar)){
    $id=$fila['idArea'];
    echo"<tr>";
    echo"<td>".$fila['idArea']." </td>";
    echo"<td>".$fila['area']."</td>";
    echo"<td>".$fila['idDepartamento']."</td>";
    echo"<td><a href='editarAreas.php?editar=$id'>Editar</a></td>";
    echo"<td><a href='eliminarAreas.php?eliminar=$id'>Eliminar</a></td>";
    "</tr>";
}

    echo"</table>";
    echo"<br/><br/>";
    echo"<a href='ingresarAreas.php'>Ingresar otra Área</a>";

?>