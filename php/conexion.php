<?php

    function conectarBaseDeDatos() {
    // Conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "prueba");

    // Verificar conexión
    if ($conexion->connect_errno) {
        die("Error al conectar: " . $conexion->connect_errno);
    } else {
        echo "Base de datos conectada";
    }

    return $conexion;
    }
?>