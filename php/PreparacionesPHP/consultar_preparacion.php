<?php
// Incluir el archivo de conexión a la base de datos
include '../conexion.php';

// Verificar la conexión
if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Obtener el examen seleccionado desde la solicitud GET (proteger contra inyección SQL)
$examen = mysqli_real_escape_string($conexion, $_GET['examen']);

// Consulta preparada para obtener la preparación del examen seleccionado
$query = "SELECT DESEYPDES FROM $tabla WHERE EXACOD = ?";
$stmt = mysqli_prepare($conexion, $query);

// Vincular parámetros
mysqli_stmt_bind_param($stmt, "s", $examen);

// Ejecutar la consulta
mysqli_stmt_execute($stmt);

// Obtener el resultado de la consulta
mysqli_stmt_bind_result($stmt, $preparacion);

// Obtener el valor de la preparación
mysqli_stmt_fetch($stmt);

// Cerrar la consulta preparada y la conexión
mysqli_stmt_close($stmt);
mysqli_close($conexion);

// Devolver la preparación como JSON
echo json_encode(array('DESEYPDES' => $preparacion));
?>
