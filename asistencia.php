<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Asistencia</title>
</head>

<body>
    <?php

    require_once('../base de datos/conexion.php');

    $sql = "SELECT nombre FROM alumno";
    $result = $conexion->query($sql);
    
    ?>
    <H1>REGISTRO DE ASISTENCIA DE ALUMNOS</H1>
    <form action="" method="post">
        <label for="nombre">
            NOMBRE:
            <select name="name" id="name">
                <?php

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value"' . $row['nombre'] . '">' . $row['nombre'] . '</option';
                    }
                } else {
                    echo '<option value"">No hay alumnos registrados</option';
                }

                ?>
            </select>
        </label>
        <br><br>
        <label for="dni">
            DNI:
            <input type="number" name="dni" id="dni">
        </label>
        <br><br>
        <label for="asistencia">
            ASISTIO:
            <input type="radio" name="asistencia" id="asistencia" value="A">
        </label>
        <br><br>
        <label for="asistencia">
            TARDANZA:
            <input type="radio" name="asistencia" id="asistencia" value="T">
        </label>
        <br><br>
        <label for="asistencia">
            FALTA:
            <input type="radio" name="asistencia" id="asistencia" value="F">
        </label>
        <br><br>
        <input type="submit" value="Registrar Asistencia">
        <a type="button" href="index.php">Registrar Alumno</a>
    </form>
</body>
</html>