<?php

//echo $nome,$email,$senha,$cidade,$estado,$fem30,$fem40,$fem50,$mas35,$mas40,$mas45;

	$servername="localhost:3308";
	$username="root";
	$password="";
	$database="montepascoal";
	
	$conn = mysqli_connect($servername, $username, $password, $database);
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$nome   = $conn -> real_escape_string  ($_POST['nome']);
$email  = $conn -> real_escape_string  ($_POST['email']);
$senha  = password_hash ($_POST['senha'], PASSWORD_DEFAULT);
$cidade = $conn -> real_escape_string  ($_POST['cidade']);
$estado = $conn -> real_escape_string  ($_POST['estado']);

$fem30 = $conn -> real_escape_string ($_POST['fem30']);
$fem40 = $conn -> real_escape_string ($_POST['fem40']);
$fem50 = $conn -> real_escape_string ($_POST['fem50']);

$mas35 = $conn -> real_escape_string ($_POST['mas35']);
$mas40 = $conn -> real_escape_string ($_POST['mas40']);
$mas45 = $conn -> real_escape_string ($_POST['mas45']);

if ($fem30 == "true") {$fem30 = 1;}else {$fem30 = 0;}
if ($fem40 == "true") {$fem40 = 1;}else {$fem40 = 0;}
if ($fem50 == "true") {$fem50 = 1;}else {$fem50 = 0;}
if ($mas35 == "true") {$mas35 = 1;}else {$mas35 = 0;}
if ($mas40 == "true") {$mas40 = 1;}else {$mas40 = 0;}
if ($mas45 == "true") {$mas45 = 1;}else {$mas45 = 0;}



	$sql = "INSERT INTO equipe (nome,email,senha,cidade,estado,numeroatletas,fem30,fem40,fem50,mas35,mas40,mas45) VALUES ('$nome','$email','$senha',
	'$cidade','$estado',0,'$fem30','$fem40','$fem50','$mas35','$mas40','$mas45')";
 
	if($conn->query($sql) === true){
    echo "Cadastro efetuado com sucesso. Por favor efetue o login para continuar.";
	}
	
	else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error; 
}
	mysqli_close($conn);
?>
