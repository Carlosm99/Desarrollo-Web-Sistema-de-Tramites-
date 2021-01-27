<?php
include("C:/xampp/htdocs/itch/conexion/conexion.php");

if(isset($_GET['editar'])){
    $editar_id=$_GET['editar'];
    $consulta="SELECT * FROM departamentos WHERE idDepartamento='$editar_id'";
    $ejecutar=sqlsrv_query($conn, $consulta);
?>

<form method="POST" action="grabardatosDepartamentos.php">
    <?php
    $fila=sqlsrv_fetch_array($ejecutar);
    echo "Departamento: <input type='text' name='departamento' 
    value='".$fila['departamento']."'> <br/>";
    echo "Edificio: <input type='text' name='edificio' 
    value='".$fila['idEdificio']."'><br/>";
    echo "<input type='hidden' name='idDepartamento' 
    value='".$editar_id."'><br/>";
    ?>
    <input type="submit" name="Enviar" value="Enviar Datos">
</form>
<?php } ?>