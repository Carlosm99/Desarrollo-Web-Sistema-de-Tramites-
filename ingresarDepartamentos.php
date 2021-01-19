<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Departamento</title>
</head>
<body>
<h3>Ingrese los datos del Departamento</h3>
    <form action="datosDepartamentos.php" method="POST">
        Departamento: <input type="text" name="departamento"><br/>
        Edificio: <input type="text" name="edificio"><br/>
        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" name="reset" value="Borrar">
    <br/><br/>
    <td><a href="consultaDepartamentos.php">Consulta de Departamentos</a></td>
    </form>

    
</body>
</html>