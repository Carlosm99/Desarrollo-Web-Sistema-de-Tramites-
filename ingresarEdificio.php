<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Edificio</title>
</head>
<body>
<h3>Ingrese los datos del edificio</h3>
    <form action="datosEdificios.php" method="POST">
        Nomenclatura: <input type="text" name="nomenclatura"><br/>
        Ubicacion: <input type="text" name="ubicacion"><br/>
        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" name="reset" value="Borrar">
    <br/><br/>
    <td><a href="consultaEdificios.php">Consulta de Edificios</a></td>
    </form>

    
</body>
</html>