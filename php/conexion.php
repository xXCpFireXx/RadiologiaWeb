<?php
header("Content-Type: text/html;charset=utf-8");
// Datos de conexión a la base de datos
$host = '107.180.116.38';
$usuario = 'AdminRadiologia';
$contrasena = 'DbRadiologia2024*+';
$basededatos = 'preparaciones';
$tabla = 'preparaciones';

// Conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $basededatos);
$conexion->set_charset("utf8");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}

?>