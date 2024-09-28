<?php

define ('SERVIDOR','localhost');
define ('USUARIO','root');
define ('PASSWORD','');
define ('BD','ventas');

$servidor= "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor, USUARIO, PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "la conexion a la base de datos fue exitosa";
}catch(PDOException){
    echo "Error al conectar a la base de datos";
}

//Variable global para indicar la ubicacion de la aplicacion
$URL = "http://localhost/www.ventas.com";

date_default_timezone_set("America/Bogota");
$fecha_hora = date('Y-m-d H:i:s');