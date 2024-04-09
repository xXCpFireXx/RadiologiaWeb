<?php
// Datos de conexión a la base de datos
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$basededatos = 'prueba';
$tabla = 'preparaciones';

// Conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $basededatos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}

?>