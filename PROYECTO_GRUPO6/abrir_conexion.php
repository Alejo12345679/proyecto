<?php

$host="localhost";
$usuariodb="root";
$clavedb="";

//NOMBRE DE LA BASE DE DATOS
$basededatos="proyecto";
//NOMBRE DE LA TABLA DE LA BASE DE DATOS
$tabla_db1="login";
$tabla_db2="contactanos";
$tabla_db3="registrar_producto";


$conexion = new mysqli($host, $usuariodb, $clavedb, $basededatos);

if ($conexion->connect_errno) {
    echo "ERROR AL CONECTAR";
    exit();
}

?>