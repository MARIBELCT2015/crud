<?php
$host = "premium41";
$usuario = "funduluf_bd_empleados";
$contrasena = "PJCdEB&wcNxM";
$base_de_datos = "funduluf_bd_empleados";

$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
