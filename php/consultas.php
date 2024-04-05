<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "prueba");

// Verificar la conexión
if (!$conexion) {
    die("Error al conectar: " . mysqli_connect_error());
}

// Obtener el tipo de consulta y el código del examen si es necesario
$tipoConsulta = $_GET['consulta'];
$exacod = isset($_GET['exacod']) ? mysqli_real_escape_string($conexion, $_GET['exacod']) : '';

// Consulta según el tipo de consulta
switch ($tipoConsulta) {
    case 'tomografia':
        $query = "SELECT EXACOD, EXANOM, DESEYPDES FROM preparaciones WHERE exanom LIKE 'ANGIOTAC%' OR exanom LIKE '%UROTOMOGRA%' OR exanom LIKE 'TAC%' OR exanom LIKE 'TC%' OR exanom LIKE '%ANGIOTC%'";
        break;
    case 'resonancia':
        $query = "SELECT EXACOD, EXANOM, DESEYPDES FROM preparaciones WHERE exanom LIKE 'RMN%' OR exanom LIKE '%SONANCIA%' OR exanom LIKE 'ANGIORESONANCIA%'";
        break;
    case 'mamografia':
        $query = "SELECT EXACOD, EXANOM, DESEYPDES FROM preparaciones WHERE exanom LIKE '%MAMOGRAFIA%'";
        break;
    case 'rx':
        $query = "SELECT EXACOD, EXANOM, DESEYPDES FROM preparaciones WHERE exanom LIKE '%RX%' OR exanom LIKE '%RADIOGRAFIA%'";
        break;
    case 'ecografia':
        $query = "SELECT EXACOD, EXANOM, DESEYPDES FROM preparaciones WHERE exanom LIKE '%ECOGRAFIA%' OR exanom LIKE '%ULTRASONOGRAFIA%'";
        break;
    default:
        echo json_encode(array('error' => 'Tipo de consulta no válido'));
        exit;
}

// Agregar condición para obtener un examen específico si se proporciona el exacod
if ($exacod !== '') {
    $query .= " AND EXACOD = '$exacod'";
}

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $query);

// Convertir los resultados a un array asociativo
$examenes = [];
while ($fila = mysqli_fetch_assoc($resultado)) {
    $examenes[] = $fila;
}

// Cerrar conexión
mysqli_close($conexion);

// Devolver los exámenes como JSON
echo json_encode($examenes);
?>
