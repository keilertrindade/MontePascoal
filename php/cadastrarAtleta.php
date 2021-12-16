
<?php
	session_start();
//	var_dump($_POST);
//	var_dump($_FILES);
//	var_dump($_SESSION);
//	var_dump($_FILES['uimage']);

	$servername="localhost:3308";
	$username="root";
	$password="";
	$database="montepascoal";
	
	$conn = mysqli_connect($servername, $username, $password, $database);
	
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$nome = $conn -> real_escape_string ($_POST['nomeatleta']);
$rg = $conn -> real_escape_string ($_POST['rg']);
$data = $conn -> real_escape_string ($_POST['datanascimento']);
$posicao = $conn -> real_escape_string ($_POST['select']);
$idequipe = (int)$_SESSION['id'];

//echo $nome;


$target_dir = "../perfilatleta/";
$target_file = $target_dir . basename($_FILES["foto-1751"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["foto-1751"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check file size
if ($_FILES["foto-1751"]["size"] > 9000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}




//$target_file = $target_dir . basename($_FILES["foto-1751"]["name"]);

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	
	$sql = "INSERT INTO atletas (nome,rg,datanascimento,posicao,equipe_idequipe) VALUES ('$nome','$rg','$data','$posicao','$idequipe')";
 
	if($conn->query($sql) === true){
		$idatleta = (string)$conn->insert_id;
		$target = $target_dir . $idatleta . "-" . basename($_FILES["foto-1751"]["name"]);
		
		$recnumatleta = "SELECT numeroatletas FROM equipe WHERE  idequip = $idequipe";
		$numatleta = (int)$conn->query($recnumatleta);
		
		//var_dump($numatleta);

		$numatleta++;
		$updatenumatleta = "UPDATE equipe SET numeroatletas='$numatleta' WHERE idequipe=$idequipe";
		$conn->query($updatenumatleta);
		$_SESSION['id'] = $numatleta;
	
    if (move_uploaded_file($_FILES["foto-1751"]["tmp_name"], $target)) {
		$update = "UPDATE atletas SET foto='$target' WHERE idatletas=$idatleta";
		if ($conn->query($update) === true){
			
			echo "<script>
				alert('Cadastro Realizado com sucesso!');
				window.location.href='../painel.php';
			 </script>";
			
		}   
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
    // echo "Cadastro efetuado com sucesso. Por favor efetue o login para continuar.";
	}
}

mysqli_close($conn);
?>
