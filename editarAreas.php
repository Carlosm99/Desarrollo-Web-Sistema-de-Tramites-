<?php
include("C:/xampp/htdocs/itch/conexion/conexion.php");

if(isset($_GET['editar'])){
    $editar_id=$_GET['editar'];
    $consulta="SELECT * FROM areas WHERE idArea='$editar_id'";
    $ejecutar=sqlsrv_query($conn, $consulta);

?>
<form method="POST" action="grabardatosAreas.php">
    <?php
    $fila=sqlsrv_fetch_array($ejecutar);
    echo "Area: <input type='text' name='area' 
    value='".$fila['area']."'> <br/>";
    echo "Departamento: <input type='text' name='idDepartamento' 
    value='".$fila['idDepartamento']."'><br/>";
    echo "<input type='hidden' name='idArea' 
    value='".$editar_id."'><br/>";
    ?>
    <input type="submit" name="Enviar" value="Enviar Datos">
</form>
<?php } ?>

