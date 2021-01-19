<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Area</title>
</head>
<body>
<h3>Ingrese los datos del Área</h3>
    <form action="datosAreas.php" method="POST">
        Área: <input type="text" name="area"><br/>
        Departamento: <input type="text" name="idDepartamento"><br/>
        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" name="reset" value="Borrar">
    <br/><br/>
    <td><a href="consultaAreas.php">Consulta de Áreas</a></td>
    </form>

    
</body>
</html>