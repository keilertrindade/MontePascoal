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
		alert("Por Favor digite um e-mail válido");
		return false;
	}
		
