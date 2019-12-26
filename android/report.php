<?php

//include 'conexion.php';
//$con = mysqli_connect("[::1]", "sistemaambulantes", "gobambu19", "ambulante");
//$con = mysqli_connect("localhost", "root", "", "comerciantes");
$con = mysqli_connect("localhost", "corpboxc_kamerli", "k11204030290006", "corpboxc_comerciantes");
//$email=$_POST['email'];

$id_post = $_POST["id"];
$id_post = intval($id_post);


$statement = "SELECT * FROM comentarios WHERE id_comerciante = ".$id_post;
$resultado = mysqli_query($con,$statement);

$json = array();

while($registro = mysqli_fetch_array($resultado)){
  $json['comentarios'][]=$registro;
}
mysqli_close($con);
echo json_encode($json);
//echo "<br>";

//echo "<pre>";
//print_r($json);
//echo "</pre>";




//$consulta="SELECT * FROM master WHERE email = '$email'";
//$resultado=$conexion->query($consulta);

//while($fila=$resultado->fetch_array()){
  //$usuario[] = array_map('utf8_encode', $fila);
//}

//echo json_encode($usuario);
//$resultado->close();
 ?>
