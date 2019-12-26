<?php

/*$hostname='[::1]';
$database='ambulante';
$username='sistemaambulantes';
$password='gobambu19';*/

/*$hostname='localhost';
$database='comerciantes';
$username='root';
$password='';*/

$hostname='localhost';
$database='corpboxc_comerciantes';
$username='corpboxc_kamerli';
$password='k11204030290006';

$conexion = new mysqli($hostname,$username,$password,$database);
if ($conexion->connect_errno) {
  echo "No se pudo conectar a la base de datos";
}


 ?>
