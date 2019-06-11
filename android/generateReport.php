<?php

include 'conexion.php';
$id_master=$_POST['id_master'];
$nombre_master=$_POST['nombre_master'];
$id_comerciante=$_POST['id_comerciante'];
$comentario=$_POST['comentario'];
$reporte=$_POST['reporte'];

date_default_timezone_set('America/Mexico_City');
$fecha_actual = date("Y-m-d H:i:s");


$consulta = "INSERT INTO comentarios VALUE(null,'".$id_master."','".$nombre_master."','".$id_comerciante."','".$comentario."','".$reporte."','".$fecha_actual."')";
mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);

 ?>
