<?php

$hostname='[::1]';
$database='ambulante';
$username='sistemaambulantes';
$password='gobambu19';

$conexion = new mysqli($hostname,$username,$password,$database);
if ($conexion->connect_errno) {
  echo "No se pudo conectar a la base de datos";
}


 ?>
