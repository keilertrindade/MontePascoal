function mostrarSenha() {
  var x = document.getElementById("text-37d8");
  var y = document.getElementById("text-37d9");
  if (x.type === "password") {
    x.type = "text";
	y.type = "text";
  } else {
    x.type = "password";
	y.type = "password";
  }
}


function cadastrarEquipe(){
	
	var nome = document.getElementById("name-f5dd").value;
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
	
	
}