function proximaEquipe() {

$.ajax({
	  url:'php/gerenciarLista.php',
	  type:'POST',
	  data:{'operacao':'avancarequipe'},
      complete: function (response) {
		//alert(response.responseText);
		//alert("Cadastro Realizado com sucesso");
		//window.location.href = "VisualizarEquipe.php";
		location.reload();

      },
      error: function () {
          alert('Erro');
      }
  });

}


function anteriorEquipe() {

$.ajax({
	  url:'php/gerenciarLista.php',
	  type:'POST',
	  data:{'operacao':'retrocederequipe'},
      complete: function (response) {
		 //alert(response.responseText);
		//alert("Cadastro Realizado com sucesso");
		//window.location.href = "VisualizarEquipe.php";
		location.reload();

      },
      error: function () {
          alert('Erro');
      }
  });

}


function proximoAtleta() {




}

function anteriorAtleta() {




}