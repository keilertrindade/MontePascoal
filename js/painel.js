//var idequipe;

function carregar(){
}


function sair() {
alert("logoff");
}


function editarEquipe(){
	
	alert(idequipe);
	
	/*var nome = document.getElementById("name-f5dd").value;
	var email = document.getElementById("email-f5dd").value;
	var senha = document.getElementById("text-37d8").value;
	var csenha = document.getElementById("text-37d9").value;
	var cidade = document.getElementById("text-bc4d").value;
	var estado = document.getElementById("text-8ec8").value;
	
	var fem30 = document.getElementById("checkbox-1dea").checked;
	var fem40 = document.getElementById("checkbox-18e2").checked;
	var fem50 = document.getElementById("checkbox-a07d").checked;
	var mas35 = document.getElementById("checkbox-5669").checked;
	var mas40 = document.getElementById("checkbox-0be0").checked;
	var mas45 = document.getElementById("checkbox-8577").checked;
	
		if (!nome || !email || !senha || !csenha || !cidade || !estado){
			alert("Por favor preencha todos os campos!");
			return false;
		}else if (fem30 == false && fem40 == false && fem50 == false && mas35 == false && mas40 == false && mas45 == false)
		{
			alert("Por favor selecione pelo menos uma categoria!");
			return false;
		}else if (csenha != senha){
			alert("Senhas não são iguais. Por favor confira!");
			return false;
		}		
		else {
			alert("Tudo preenchido!"); //Adicionar ajax a partir daqui
			return false; 
		}
	*/
	
}

function cadastarAtleta(idequipestring, numatletastring){
	
	var idequipe = parseInt(idequipestring);
	var numatleta = parseInt(numatletastring);


	if (numatleta == 20){
		alert("Você já cadastrou o máximo de atletas permitidos. Por favor exclua ou edit um dos já cadastrados.");
	}else{
		window.location.href = "cadastroAtleta.php";		
	 /* $.ajax({
	  url:'cadastroAtleta.php',
	  type:'POST',
	  data:{'idequipe':idequipe,'numatleta':numatleta},
      complete: function (response) {
		  alert(response.responseText);
		//alert("Cadastro Realizado com sucesso");
		window.location.href = "painel.php";
      },
      error: function () {
          alert('Erro');
      }
  }); */
		
	}

}


function editarAtleta(){
	alert("editarAtleta");
}