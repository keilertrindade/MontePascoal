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

mysqli_close($conn);

if (!isset($_SESSION['contadorEquipe'])) {
    $_SESSION['contadorEquipe'] = 0;
}


$_SESSION['equipenome'] = $equipes[$_SESSION['contadorEquipe']]['nome'];
$_SESSION['equipeemail'] = $equipes[$_SESSION['contadorEquipe']]['email'];
$_SESSION['equipecidade'] = $equipes[$_SESSION['contadorEquipe']]['cidade'];
$_SESSION['equipeestado'] = $equipes[$_SESSION['contadorEquipe']]['estado'];
$_SESSION['equipenumeroatletas'] = $equipes[$_SESSION['contadorEquipe']]['numeroatletas'];
$_SESSION['equipenumeroequipe'] = $resultequipe->num_rows;

$_SESSION['fem30'] = (int) $equipes[$_SESSION['contadorEquipe']]['fem30'];
$_SESSION['fem40'] = (int) $equipes[$_SESSION['contadorEquipe']]['fem40'];
$_SESSION['fem50'] = (int) $equipes[$_SESSION['contadorEquipe']]['fem50'];
$_SESSION['mas35'] = (int) $equipes[$_SESSION['contadorEquipe']]['mas35'];
$_SESSION['mas40'] = (int) $equipes[$_SESSION['contadorEquipe']]['mas40'];
$_SESSION['mas45'] = (int) $equipes[$_SESSION['contadorEquipe']]['mas45'];

//var_dump($_SESSION['equipenumeroequipe']);

/* echo "<script>
     	alert('Lista de equipes carregada!');
	  </script>";  */


//var_dump($_SESSION['fem30']); var_dump($_SESSION['fem40']); var_dump($_SESSION['fem50']); 

//Checkbox 0 = Falso/Nãomarcado, 1=Verdadeiro/Marcado


//echo $_SESSION['equipenome'];
//var_dump($_SESSION);
?>