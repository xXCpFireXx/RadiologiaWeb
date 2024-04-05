<?php

include 'conexion.php';

// Verificar la conexión
if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Obtener el examen seleccionado desde la solicitud GET
$examen = $_GET['examen'];

// Consulta para obtener la preparación del examen seleccionado
$query = "SELECT DESEYPDES FROM preparaciones WHERE EXACOD = '$examen'";
$resultado = mysqli_query($conexion, $query);

if (!$resultado) {
    die("Error al obtener la preparación: " . mysqli_error($conexion));
}

// Obtener la preparación como un array asociativo
$preparacion = mysqli_fetch_assoc($resultado);

// Cerrar la conexión
mysqli_close($conexion);

// Devolver la preparación como JSON
echo json_encode($preparacion);
?>
