<?php
// guardar_datos.php

// Crear conexión
$conexion = new mysqli("20.57.141.180","root","1234","prueba";

// Verifica si se envio el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$edad = $_POST['edad'];

$sql = "INSERT INTO alumnos (nombre, apellido, email, edad) VALUES ('$nombre', '$apellido', '$email', $edad)";

if ($conexion->query($sql) === TRUE) 
{
    echo "Datos guardados correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . 
    $conexion->error;
}

$conexion->close();
}
?>
