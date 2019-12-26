<?php

//include 'conexion.php';
//$con = mysqli_connect("[::1]", "sistemaambulantes", "gobambu19", "ambulante");
$con = mysqli_connect("localhost", "root", "", "comerciantes");
//$con = mysqli_connect("localhost", "corpboxc_kamerli", "k11204030290006", "corpboxc_comerciantes");
//$email=$_POST['email'];

$email = $_POST["email"];
$password = $_POST["pass"];

$statement = mysqli_prepare($con,"SELECT * FROM master WHERE email = ? AND pass = ?");
mysqli_stmt_bind_param($statement, "ss", $email, $password);
mysqli_stmt_execute($statement);

mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement, $id, $user, $email, $pass, $telefono, $direccion,$nivel,$img);

$response = array();
$response["success"] = false;

while(mysqli_stmt_fetch($statement)){
    $response["success"] = true;
    $response["id"] = $id;
    $response["user"] = $user;
    $response["email"] = $email;
    $response["pass"] = $pass;
    $response["telefono"] = $telefono;
    $response["direccion"] = $direccion;
    $response["nivel"] = $nivel;
    $response["img"] = $img;
}

echo json_encode($response);







//$consulta="SELECT * FROM master WHERE email = '$email'";
//$resultado=$conexion->query($consulta);

//while($fila=$resultado->fetch_array()){
  //$usuario[] = array_map('utf8_encode', $fila);
//}

//echo json_encode($usuario);
//$resultado->close();
 ?>
