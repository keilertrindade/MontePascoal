//var idequipe;

function carregar(){
}


function sair() {
alert("logoff");
}


function cadastrar(){
	
	
	var nome = document.getElementById("name-f5dd").value;
	var rg = document.getElementById("rg-f5dd").value;
	var data = document.getElementById("date-6fc0").value;
		
	var select = document.getElementById('select-a32d');
    var value = select.options[select.selectedIndex].value;
	let file = document.getElementById('foto-1751');
	console.log(file);
  
  
	if (!nome || !rg || !data || !file){
			alert("Por favor preencha todos os campos!");
			return false;
		}	
		
		else{
			
		//var formdata = new FormData();
		var file_data = $('#foto-1751').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('fileimagem', $('#foto-1751')[0].files[0]);
		//alert(form_data); 
		//formdata.append('nome', $('input.name-f5dd').val());
		console.log(form_data);
	
	  $.ajax({
	  url:'php/cadastrarAtleta.php',
	  type:'POST',
	  data:{'nome':nome,'rg':rg,'data':data,'posicao':value,form_data}, 
	  processData: false,
      complete: function (response) {
		alert(response.responseText);
		//alert("Cadastro Realizado com sucesso");
		//window.location.href = "Login.php";
      },
      error: function () {
          alert('Erro');
      }
  });
			
}
	
	
}

/*document.getElementById("menu_images").onchange = function () {
    var reader = new FileReader();
    if(this.files[0].size>528385){
        alert("Image Size should not be greater than 500Kb");
        $("#menu_image").attr("src","blank");
        $("#menu_image").hide();  
        $('#menu_images').wrap('<form>').closest('form').get(0).reset();
        $('#menu_images').unwrap();     
        return false;
    }
    if(this.files[0].type.indexOf("image")==-1){
        alert("Invalid Type");
        $("#menu_image").attr("src","blank");
        $("#menu_image").hide();  
        $('#menu_images').wrap('<form>').closest('form').get(0).reset();
        $('#menu_images').unwrap();         
        return false;
    }   
    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("menu_image").src = e.target.result;
        $("#menu_image").show(); 
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
*/
