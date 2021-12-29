<?php
session_start();

	$servername="localhost:3308";
	$username="root";
	$password="";
	$database="montepascoal";
	
	$conn = mysqli_connect($servername, $username, $password, $database);
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sqlequipe = "SELECT * FROM `equipe`";

$sqlatletas = "SELECT * FROM `atletas`";


$resultequipe = $conn->query($sqlequipe);
$equipes = $resultequipe->fetch_all(MYSQLI_ASSOC);

$resultatletas = $conn->query($sqlatletas);
//$atletasequipe = $resultatletas->fetch_all(MYSQLI_ASSOC);

//var_dump($equipes);
//var_dump($atletasequipe);


$_SESSION['contador'] = 0;

$_SESSION['equipenome'] = $equipes[$_SESSION['contador']]['nome'];
$_SESSION['equipeemail'] = $equipes[$_SESSION['contador']]['email'];
$_SESSION['equipecidade'] = $equipes[$_SESSION['contador']]['cidade'];
$_SESSION['equipeestado'] = $equipes[$_SESSION['contador']]['estado'];
$_SESSION['equipenumeroatletas'] = $equipes[$_SESSION['contador']]['numeroatletas'];

$_SESSION['fem30'] = (int) $equipes[$_SESSION['contador']]['fem30'];
$_SESSION['fem40'] = (int) $equipes[$_SESSION['contador']]['fem40'];
$_SESSION['fem50'] = (int) $equipes[$_SESSION['contador']]['fem50'];
$_SESSION['mas35'] = (int) $equipes[$_SESSION['contador']]['mas35'];
$_SESSION['mas40'] = (int) $equipes[$_SESSION['contador']]['mas40'];
$_SESSION['mas45'] = (int) $equipes[$_SESSION['contador']]['mas45'];


//var_dump($_SESSION['fem30']); var_dump($_SESSION['fem40']); var_dump($_SESSION['fem50']); 

//Checkbox 0 = Falso/Nãomarcado, 1=Verdadeiro/Marcado


//echo $_SESSION['equipenome'];
//var_dump($_SESSION);
?>