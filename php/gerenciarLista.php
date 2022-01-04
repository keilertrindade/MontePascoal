
<?php
session_start();

$operacao = $_POST['operacao'];

if ($operacao == 'avancarequipe'){
	
	$_SESSION['contadorEquipe']++;	
	
	if ($_SESSION['equipenumeroequipe'] == $_SESSION['contadorEquipe']) {
		$_SESSION['contadorEquipe'] = 0;
	}

	//var_dump($_SESSION['contadorEquipe']);
	//var_dump($_SESSION['equipenumeroequipe']);
	return true;
	
}


if ($operacao == 'retrocederequipe'){
	$_SESSION['contadorEquipe']--;	
	
	if ($_SESSION['contadorEquipe'] < 0) {
		$_SESSION['contadorEquipe'] = ($_SESSION['equipenumeroequipe']-1);
	}
	
	//var_dump($_SESSION['contadorEquipe']);
	
	return true;

}


if ($operacao == 'avancaratleta'){
	$_SESSION['contadorAtleta']++;	
	
	if ($_SESSION['contadorAtleta'] == $_SESSION['atletanumeroatletas']){
		$_SESSION['contadorAtleta'] = 0;
	}
	
	//var_dump($_SESSION['contadorEquipe']);

	return true;
}


if ($operacao == 'retrocederatleta'){
	
	$_SESSION['contadorAtleta']--;	
	
	if ($_SESSION['contadorAtleta'] < 0) {
		$_SESSION['contadorAtleta'] = ($_SESSION['atletanumeroatletas']-1);
	}
	
	//var_dump($_SESSION['contadorAtleta']);
	
	return true;
}



?>