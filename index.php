<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencias</title>
</head>
<body>
    <h1>REGISTRO DE ASISTENCIA</h1>
    <form action="" method="post">
        <label for="dni">
            DNI:
            <input type="number" id="dni" name="dni">
        </label>
        <br><br>
        <label for="nombre">
            NOMBRE:
            <input type="text" name="nombre" id="nombre">
        </label>
        <br><br>
        <label for="apellidos">
            APELLIDOS:
            <input type="text" name="apellidos" id="apellidos">
        </label>
        <br><br>
        <label for="genero">
            MASCULINO:
            <input type="radio" name="genero" id="genero" value="masculino">
        </label>
        <label for="genero">
            FEMENINO:
            <input type="radio" name="genero" id="genero" value="femenino">
        </label>
        <br><br>
        <input type="submit" value="Registrar Alumno">
        <a type="button" href="asistencia.php">Registrar Asistencia</a>
    </form>
</body>
</html>