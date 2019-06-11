<?php

//include 'conexion.php';
$con = mysqli_connect("[::1]", "sistemaambulantes", "gobambu19", "ambulante");

//$email=$_GET['email'];

$id_post = $_GET["id"];
$id_post = intval($id_post);


$statement = "SELECT * FROM comentarios WHERE id_comerciante = ".$id_post;
$resultado = mysqli_query($con,$statement);

$json = array();

while($registro = mysqli_fetch_array($resultado)){
  $json['comentarios'][]=$registro;
}
mysqli_close($con);
echo json_encode($json);







//$consulta="SELECT * FROM master WHERE email = '$email'";
//$resultado=$conexion->query($consulta);

//while($fila=$resultado->fetch_array()){
  //$usuario[] = array_map('utf8_encode', $fila);
//}

//echo json_encode($usuario);
//$resultado->close();
 ?>
