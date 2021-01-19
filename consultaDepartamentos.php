<?php
include("conexion.php");

$consulta="SELECT * FROM departamentos";
$ejecutar=sqlsrv_query($conn, $consulta);
echo"<h2>Departamentos</h2>";
echo"<h3>Consulta, Edición y Eliminacion de Departamentos</h3>";

echo"<table border='1'> <tr>
<td>IdDepartamento</td>
<td>Departamento</td>
<td>Edificio</td>
</tr>";

while($fila=sqlsrv_fetch_array($ejecutar)){
    $id=$fila['idDepartamento'];
    echo"<tr>";
    //dentro de cada celda $fila se ingresa el dato de la tabla de la db
    echo"<td>".$fila['idDepartamento']."</td>";//nombre del campo en la base de datos
    echo"<td>".$fila['departamento']."</td>";//nombre del campo en la base de datos
    echo"<td>".$fila['idEdificio']."</td>";//nombre del campo en la base de datos
    echo"<td><a href='editarDepartamentos.php?editar=$id'>Editar</a></td>";
    echo"<td><a href='eliminarDepartamentos.php?eliminar=$id'>Eliminar</a></td>";
    "</tr>";
}

    echo"</table>";
    echo"<br/><br/>";
    echo"<a href='ingresarDepartamentos.php'>Ingresar otro Departamento</a>";

?>