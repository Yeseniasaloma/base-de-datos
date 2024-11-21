<?php

require_once('../conexion.php');

class Alumno{
    public $dni, $nombre, $apellidos, $genero;
    public $conexion;


    public function __construct($conexion, $dni, $nombre, $apellidos, $genero)
    {
        $this->conexion = $conexion;
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->genero = $genero;
    }


    public function registrarAlumno()
    {
        $sql = "INSERT INTO `alumno`(`dni`, `nombre`, `apellidos`, `genero`) VALUES ('$this->dni','$this->nombre','$this->apellidos','$this->genero')";
        if (mysqli_query($this->conexion, $sql)) {
            echo "El alumno fue registrado correctamente";
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