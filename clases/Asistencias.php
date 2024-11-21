<?php

require_once('../conexion.php');


class Asistencia{
    public $id_alumno, $asistencia;
    public $conexion;

    public function __construct($conexion, $id_alumno, $asistencia)
    {
        $this->conexion = $conexion;
        $this->id_alumno = $id_alumno;
        $this->asistencia = $asistencia;
    }


    public function RegistrarAsistencia()
    {
        $sql = "INSERT INTO `asistencia`(`id`, `id_alumno`, `asistencia`) VALUES ('[value-1]','[value-2]','[value-3]')";
        if(mysqli_query($this->conexion, $sql)) {
            echo "El alumno fue regstrado correctamente";
        } else {
            echo "Error al registrar al alumno: " . mysqli_error($this->conexion);
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $genero = $_POST['genero'];

    $alumnito = new Alumno($conexion, $dni, $nombre, $apellidos, $genero);

    $alumnito->registrarAlumno();
}