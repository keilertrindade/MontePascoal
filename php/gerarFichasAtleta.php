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

//$sqlequipe = "SELECT nome FROM `equipe` WHERE idequipe = equipe_idequipe";

$sqlatletas = "SELECT * FROM `atletas`";


//$resultequipe = $conn->query($sqlequipe);
//$equipes = $resultequipe->fetch_all(MYSQLI_ASSOC);

$resultatletas = $conn->query($sqlatletas);
$atletasequipe = $resultatletas->fetch_all(MYSQLI_ASSOC);
$_SESSION['atletanumeroatletas'] = $resultatletas->num_rows;
//var_dump($_SESSION['atletanumeroatletas']);
//var_dump($equipes);
//var_dump($atletasequipe);

if (!isset($_SESSION['contadorAtleta'])) {
    $_SESSION['contadorAtleta'] = 0;		
}

$_SESSION['atletanome'] = $atletasequipe[$_SESSION['contadorAtleta']]['nome'];
$_SESSION['atletarg'] = $atletasequipe[$_SESSION['contadorAtleta']]['rg'];
$_SESSION['atletanascimento'] = $atletasequipe[$_SESSION['contadorAtleta']]['datanascimento'];
$_SESSION['atletaposicao'] = $atletasequipe[$_SESSION['contadorAtleta']]['posicao'];
$idequipe = $atletasequipe[$_SESSION['contadorAtleta']]['equipe_idequipe'];
$_SESSION['atletafoto'] = $atletasequipe[$_SESSION['contadorAtleta']]['foto'];


$sqlequipe = "SELECT nome FROM `equipe` WHERE idequipe = '$idequipe'";
$nomeequipe = $conn->query($sqlequipe);

/* var_dump($idequipe );
var_dump($nomeequipe);
 */
$resultequipe = $nomeequipe->fetch_all(MYSQLI_ASSOC);

$_SESSION['atletanomeequipe'] = $resultequipe[0]['nome'];

/*var_dump($_SESSION['atletanomeequipe']);

 var_dump($nomeequipe);
var_dump($resultequipe);
var_dump($_SESSION['atletanomeequipe']); */


mysqli_close($conn);


//var_dump($_SESSION['fem30']); var_dump($_SESSION['fem40']); var_dump($_SESSION['fem50']); 

//Checkbox 0 = Falso/Nãomarcado, 1=Verdadeiro/Marcado


//echo $_SESSION['equipenome'];
//var_dump($_SESSION);
?>