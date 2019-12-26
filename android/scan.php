<?php
header('Content-Type: text/html; charset=utf-8');
//include 'conexion.php';
//$con = mysqli_connect("[::1]", "sistemaambulantes", "gobambu19", "ambulante");
$con = mysqli_connect("localhost", "root", "", "comerciantes");
//$con = mysqli_connect("localhost", "corpboxc_kamerli", "k11204030290006", "corpboxc_comerciantes");
//$email=$_GET['email'];

$folio = '';
$folio = $_POST["id"];
$folio = intval($folio);

$statement = mysqli_prepare($con,"SELECT * FROM ambulante WHERE id = ?");
mysqli_stmt_bind_param($statement, "i", $folio);
mysqli_stmt_execute($statement);

mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement, $ida, $nombre, $nombre_segundo, $curp, $email, $tel,$cel,$genero,$giro,$tags,$tipo,$tarjetonsindicato,$horario,$descripcion,$zona,$direccion,$coordenadas,$metros,$estructura,$comentario,$estado,$vigencia,$img,$png,$pdf,$fecha_creado,$otro,$jpeg);

$response = array();
$response["success"] = false;

while(mysqli_stmt_fetch($statement)){
    $response["success"] = true;
    $response["id"] = $ida;
    $response["nombre"] = utf8_encode($nombre);
    $response["nombre_segundo"] = utf8_encode($nombre_segundo);
    $response["curp"] = utf8_encode($curp);
    $response["email"] = utf8_encode($email);
    $response["tel"] = $tel;
    $response["cel"] = $cel;
    $response["genero"] = $genero;
    $response["giro"] = utf8_encode($giro);
    $response["tags"] = utf8_encode($tags);
    $response["tipo"] = $tipo;
    $response["tarjetonsindicato"] = $tarjetonsindicato;
    $response["horario"] = $horario;
    $response["descripcion"] = utf8_encode($descripcion);
    $response["zona"] = $zona;
    $response["direccion"] = utf8_encode($direccion);
    $response["coordenadas"] = $coordenadas;
    $response["metros"] = $metros;
    $response["estructura"] = utf8_encode($estructura);
    $response["comentario"] = utf8_encode($comentario);
    $response["estado"] = $estado;
    $response["vigencia"] = $vigencia;
    $response["img"] = $img;
    $response["png"] = $png;
    $response["pdf"] = $pdf;
    $response["fecha_creado"] = $fecha_creado;
    $response["otro"] = $otro;
    $response["jpeg"] = $jpeg;
    //echo $response["tags"];
}
echo json_encode($response,JSON_UNESCAPED_UNICODE);







//$consulta="SELECT * FROM master WHERE email = '$email'";
//$resultado=$conexion->query($consulta);

//while($fila=$resultado->fetch_array()){
  //$usuario[] = array_map('utf8_encode', $fila);
//}

//echo json_encode($usuario);
//$resultado->close();
 ?>
