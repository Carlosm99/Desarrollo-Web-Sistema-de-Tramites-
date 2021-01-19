<?php
include("conexion.php");


if(isset($_GET['editar'])){
    $editar_id=$_GET['editar'];

    $consulta="SELECT * FROM edificios WHERE idEdificio='$editar_id'";
   
    $ejecutar=sqlsrv_query($conn, $consulta);

?>

<form method="POST" action="grabardatosEdificio.php">
    <?php
    $fila=sqlsrv_fetch_array($ejecutar);
    echo "Nomenclatura: <input type='text' name='nomenclatura' value='".$fila['nomenclatura']."'> <br/>";
    echo "Ubicacion: <input type='text' name='ubicacion' value='".$fila['ubicacion']."'> <br/>";
    echo "<input type='hidden' name='idEdificio' value='".$editar_id."'><br/>";
    
    ?>
    <input type="submit" name="Enviar" value="Enviar Datos">
</form>
<?php } ?>

