<?php
include('../../config.php');

$nombre_producto = $_POST['nombre_producto'];
$existencias = $_POST['existencias'];
$precio = $_POST['precio'];


$sentencia = $pdo->prepare("INSERT INTO t_productos (nombre_producto, existencias, precio, fecha_ingreso) 
VALUES (:nombre_producto, :existencias, :precio, :fecha_ingreso, :imagen)");

// Enlazar los parámetros a la sentencia
$sentencia->bindParam(':nombre_producto', $nombre_producto);
$sentencia->bindParam(':existencias', $existencias);
$sentencia->bindParam(':precio', $precio);
$sentencia->bindParam(':fecha_ingreso', $fecha_hora);
$sentencia->bindParam(':imagen', $imagen);




// Ejecutar la sentencia
$sentencia->execute();

echo $fecha_hora;
?>