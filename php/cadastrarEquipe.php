<?php

//echo $nome,$email,$senha,$cidade,$estado,$fem30,$fem40,$fem50,$mas35,$mas40,$mas45;

	$servername="localhost:3308";
	$username="root";
	$password="";
	$database="mydb";
	
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

//echo $nome,$email,$senha,$cidade,$estado,$fem30,$fem40,$fem50,$mas35,$mas40,$mas45;
//echo $senha;
	
	$sql = "INSERT INTO equipe (nome,email,senha,cidade,estado,numeroatletas) VALUES ('$nome', '$email', '$senha', '$cidade','$estado',0)";
		
	if($conn->query($sql) === true){
    //echo "Cadastro efetuado com sucesso.";
	$id -> insert_id;
	$categorias = "";
	
	if (mas35 == true){ 
		$categorias .= "INSERT INTO equipecategoria (categorias_idcategorias, equipe_idequipe) VALUES (1,$id);" 	
	}
	else if (mas40 == true){ 
		$categorias .= "INSERT INTO equipecategoria (categorias_idcategorias, equipe_idequipe) VALUES (2,$id);" 	
	}
	else if (mas45 == true){ 
		$categorias .= "INSERT INTO equipecategoria (categorias_idcategorias, equipe_idequipe) VALUES (3,$id);" 	
	}	
	else if (fem30 == true){ 
		$categorias .= "INSERT INTO equipecategoria (categorias_idcategorias, equipe_idequipe) VALUES (4,$id);" 	
	}
	else if (fem40 == true){ 
		$categorias .= "INSERT INTO equipecategoria (categorias_idcategorias, equipe_idequipe) VALUES (5,$id);" 	
	}
	else if (fem50 == true){ 
		$categorias .= "INSERT INTO equipecategoria (categorias_idcategorias, equipe_idequipe) VALUES (6,$id);" 	
	}
	
	
	
	/*if ($mysqli -> multi_query($categorias)){
		echo "Cadastro efetuado com sucesso.";		
	}else{
		echo "Erro";
	} */ 
	
}	
	else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error; 
}

	mysqli_close($conn);
	
?>
