<?php
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['username'];
$senha = $_POST['password'];

	$servername="localhost:3308";
	$username="root";
	$password="";
	$database="montepascoal";
	
	$conn = mysqli_connect($servername, $username, $password, $database);
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `equipe`
WHERE `email` = '$login'";

$sqlatletas = "SELECT idequipe, nome FROM `equipe`";

/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do
resultado ele redirecionará para a página site.php ou retornara  para a página
do formulário inicial para que se possa tentar novamente realizar o login */
$result = $conn->query($sql);
//echo mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
//print_r($row);
//echo $row['senha'];

if(mysqli_num_rows($result) == 1){
	if (password_verify($senha,$row['senha'])){
	
		$result2 = $conn->query($sqlatletas);
	    $atletasequipe = $result2->fetch_all(MYSQLI_ASSOC);
	
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		$_SESSION['id'] = $row['idequipe'];
		$_SESSION['nome'] = $row[3];
		$_SESSION['atletas'] = $row[6];
		
		$_SESSION['list'] = $atletasequipe;
		
		mysqli_close($conn);
		//print_r($_SESSION['list']);
		//var_dump($_SESSION['list']);
		echo "<script>
				alert('Bem Vindo!');
				window.location.href='painel.php';
			 </script>";
	}
}

else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  mysqli_close($conn);
		echo "<script>
		    	alert('Usuário ou senha inválidos!');
				window.location.href='painel.php';
			 </script>";
  }
  
  
?>