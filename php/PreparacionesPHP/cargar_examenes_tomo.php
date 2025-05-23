<?php
// // Conexión a la base de datos
include '../conexion.php';
header ('Content-type: text/html; charset=utf-8');
// Verificar la conexión
if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Consulta para obtener los exámenes
$query = "SELECT EXACOD, EXANOM FROM $tabla WHERE exanom LIKE 'ANGIOTAC%' OR exanom LIKE '%UROTOMOGRA%' OR exanom LIKE 'TAC%' OR exanom LIKE 'TC%' OR exanom LIKE '%ANGIOTC%'";
$resultado = mysqli_query($conexion, $query);

if (!$resultado) {
    die("Error al obtener los exámenes: " . mysqli_error($conexion));
}

// Obtener los exámenes como un array asociativo
$examenes = array();
while ($fila = mysqli_fetch_assoc($resultado)) {
    $examenes[] = $fila;
}

// Cerrar la conexión
mysqli_close($conexion);

// Devolver los exámenes como JSON
echo json_encode($examenes);
?>