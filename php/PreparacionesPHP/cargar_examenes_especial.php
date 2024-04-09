<?php
include '../conexion.php';

// Verificar la conexión
if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Obtener los exámenes agrupados por categoría
$query = "SELECT EXACOD, EXANOM, DESEYPDES FROM preparaciones";
$resultado = mysqli_query($conexion, $query);

if (!$resultado) {
    die("Error al obtener los exámenes: " . mysqli_error($conexion));
}

// Inicializar un array para almacenar los exámenes agrupados por categoría
$examenes = array(
    'ESTUDIOS ESPECIALES' => array(),
    'ESTUDIOS DE INTERVENCIONISMO' => array(),
    'BIOPSIAS' => array()
);

while ($fila = mysqli_fetch_assoc($resultado)) {
    $exacod = $fila['EXACOD'];
    $exanom = $fila['EXANOM'];
    $deseypdes = $fila['DESEYPDES'];

    // Agregar cada examen a la categoría correspondiente en el array
    if (in_array($exacod, array(874601, 874602, 874700, 876901, 876902, 877400, 877816, 877862, 877871, 877901, 877932, 871320, 872101, 872102, 872104, 872105, 872121, 872122, 872123, 877802))) {
        $examenes['ESTUDIOS ESPECIALES'][] = array('exacod' => $exacod, 'exanom' => $exanom, 'deseypdes' => $deseypdes);
    } elseif (in_array($exacod, array(878731, 878831, 385220, 386301, 386402, 387300, 389101, 389102, 395080, 395081, 549002, 550204, 559101, 851301, 851302, 874125, 874133, 874134, 875601, 876110, 876130, 876131, 877110, 877161, 878111))) {
        $examenes['ESTUDIOS DE INTERVENCIONISMO'][] = array('exacod' => $exacod, 'exanom' => $exanom, 'deseypdes' => $deseypdes);
    } elseif (strpos($exanom, 'BIOPSIA') !== false || strpos($exanom, 'MASTOTOMIA') !== false) {
        $examenes['BIOPSIAS'][] = array('exacod' => $exacod, 'exanom' => $exanom, 'deseypdes' => $deseypdes);
    }
}

// Cerrar la conexión
mysqli_close($conexion);

// Devolver los exámenes agrupados por categoría como JSON
echo json_encode($examenes);
?>
