<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt-BR">
<head>
  
<?php
include_once('php/gerarFichas.php');
?>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>VisualizarEquipe</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="nicepage.css" media="print">
<link rel="stylesheet" href="VisualizarEquipe.css" media="screen">
<link rel="stylesheet" href="VisualizarEquipe.css" media="print">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
	<script class="u-script" type="text/javascript" src="js/GerenciarLista.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.1.0, nicepage.com">
    <link rel="icon" href="images/favicon.png">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
<script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Monte Pascoal",
		"logo": "images/default-logo.png",
		"sameAs": [
				"https://www.instagram.com/cdmontepascoalhandebol/",
				"https://www.facebook.com/keiler.trindade/",
				"https://twitter.com/keilertrindade",
				"https://www.instagram.com/keilertrindade"
		]
}</script>
<script type="text/javascript">
window.onload = function(){
	
var fem30 = parseInt("<?php echo $_SESSION['fem30'];?>");
if (fem30 == 1){document.getElementById("checkbox-1dea").checked = true};

var fem40 = parseInt("<?php echo $_SESSION['fem40'];?>");
if (fem40 == 1){document.getElementById("checkbox-18e2").checked = true};

var fem50 = parseInt("<?php echo $_SESSION['fem50'];?>");
if (fem50 == 1){document.getElementById("checkbox-a07d").checked = true};

var mas35 = parseInt("<?php echo $_SESSION['mas35'];?>");
if (mas35 == 1){document.getElementById("checkbox-5669").checked = true};

var mas40 = parseInt("<?php echo $_SESSION['mas40'];?>");
if (mas40 == 1){document.getElementById("checkbox-0be0").checked = true};

var mas45 = parseInt("<?php echo $_SESSION['mas45'];?>");
if (mas45 == 1){document.getElementById("checkbox-8577").checked = true};
}



window.onunload = function(){
	document.getElementById("checkbox-1dea").checked = false;
	document.getElementById("checkbox-18e2").checked = false;
	document.getElementById("checkbox-a07d").checked = false;
	document.getElementById("checkbox-5669").checked = false;
	document.getElementById("checkbox-0be0").checked = false;
	document.getElementById("checkbox-8577").checked = false;
}

</script>

    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="VisualizarEquipe">
    <meta name="twitter:description" content="Monte Pascoal">
    <meta property="og:title" content="VisualizarEquipe">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-align-center-sm u-align-center-xs u-clearfix u-header u-header" id="sec-c7f0"></header>
    <section class="u-clearfix u-section-1" id="sec-afae">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-form-1">
          <div action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
            <div class="u-form-group u-form-name">
              <label for="name-f5dd" class="u-label">Nome da Equipe - <?php echo $_SESSION['equipenumeroatletas'];?> Atletas Cadastrados</label>
              <input type="text" id="name-f5dd" name="nomeequipe" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value= "<?php echo $_SESSION['equipenome'];?>">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-f5dd" class="u-label">E-Mail</label>
              <input type="email" id="email-f5dd" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value= "<?php echo $_SESSION['equipeemail'];?>">
            </div>
            <div class="u-form-group u-form-group-3">
              <label for="text-bc4d" class="u-label">Cidade</label>
              <input type="text" id="text-bc4d" name="cidade" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value= "<?php echo $_SESSION['equipecidade'];?>">
            </div>
            <div class="u-form-group u-form-group-4">
              <label for="text-8ec8" class="u-label">Estado</label>
              <input type="text" id="text-8ec8" name="estado" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value= "<?php echo $_SESSION['equipeestado'];?>">
            </div>
            <div class="u-form-checkbox u-form-group u-form-group-5">
              <input type="checkbox" id="checkbox-1dea" name="feminino30" value="On">
              <label for="checkbox-1dea" class="u-label">Feminino&nbsp; 30+</label>
            </div>
            <div class="u-form-checkbox u-form-group u-form-group-6">
              <input type="checkbox" id="checkbox-5669" name="masculino35" value="On">
              <label for="checkbox-5669" class="u-label">Masculino 35+</label>
            </div>
            <div class="u-form-checkbox u-form-group u-form-group-7">
              <input type="checkbox" id="checkbox-18e2" name="feminino40" value="On">
              <label for="checkbox-18e2" class="u-label"> Feminino&nbsp; 40+</label>
            </div>
            <div class="u-form-checkbox u-form-group u-form-group-8">
              <input type="checkbox" id="checkbox-0be0" name="masculino40" value="On">
              <label for="checkbox-0be0" class="u-label"> Masculino 40+</label>
            </div>
            <div class="u-form-checkbox u-form-group u-form-group-9">
              <input type="checkbox" id="checkbox-a07d" name="feminino50" value="On">
              <label for="checkbox-a07d" class="u-label"> Feminino&nbsp; 50+</label>
            </div>
            <div class="u-form-checkbox u-form-group u-form-group-10">
              <input type="checkbox" id="checkbox-8577" name="masculino45" value="On">
              <label for="checkbox-8577" class="u-label"> Masculino 45+</label>
            </div>
            <div class="u-align-right u-form-group u-form-submit">
              <a class="u-btn u-btn-submit u-button-style u-btn-1" onclick="proximaEquipe()">PR??XIMO</a>
             
            </div>
          </div>
        </div>
        <a href="" class="u-btn u-button-style u-btn-2" onClick="window.print()" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">IMPRIMIR</a>
        <a href="" class="u-btn u-button-style u-btn-3" onclick="anteriorEquipe()" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">ANTERIOR<br>
        </a>
      </div>
    </section>
    
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-79e0"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <p class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-default u-text-1">Desenvolvido por Keiler Trindade</p>
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/keiler.trindade/"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bda9"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-bda9"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/keilertrindade"><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-05af"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-05af"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/keilertrindade"><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-64b6"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-64b6"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
        </div><span class="u-icon u-icon-circle u-text-white u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 464.01 401.67" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-349b"></use></svg><svg class="u-svg-content" viewBox="0 0 464.01 401.67" id="svg-349b"><defs><style>.cls-1{fill:currentColor;}</style>
</defs><g id="Capa_2"><g id="Outline"><g id="EggBowl"><path class="cls-1" d="M455.51,186.13h-22.9C443,152,442.27,96.56,412.67,82.25c-9.27-4.48-20.58-4.47-33.15-.12a63.81,63.81,0,0,0-5.68-16.32C366,50.36,349.14,32.24,330.9,19.65,308,3.87,287.08-.57,271.9,7.14c-12.13,6.16-20.19,19.79-23.31,39.43-.19,1.18-.35,2.39-.5,3.62C241.64,26,229.06,5.11,210,.82c-30.75-6.94-62.55,31.42-77,61.7-6.4-6.84-13.63-11.1-21.4-12.49C94.81,47,76,57.36,58.73,79.1,44.92,96.42,34,118.64,31,135.71a63.92,63.92,0,0,0,12.2,50.42H8.5a8.5,8.5,0,0,0-8.5,8.5c0,4.75,6.26,29,7.51,33.78A232,232,0,0,0,232,401.67c60.49,0,118.66-22.94,163.8-64.6,43.34-40,68.2-91.92,68.2-142.44A8.5,8.5,0,0,0,455.51,186.13ZM105.89,151.39l.06-1.75c0-.41,0-.81,0-1.22,0-.6.07-1.2.11-1.8l.06-1.11c0-.65.11-1.29.17-1.94,0-.31,0-.62.08-.93.08-.82.17-1.64.27-2.45,0-.12,0-.24,0-.35.12-.93.25-1.84.39-2.75l.12-.66c.11-.67.22-1.33.35-2,.06-.31.13-.62.19-.94.11-.54.23-1.09.35-1.62.07-.34.16-.68.24-1,.12-.49.24-1,.37-1.47s.19-.68.29-1,.26-.91.4-1.35.22-.67.33-1,.28-.85.43-1.26.25-.65.37-1,.31-.8.47-1.19.27-.62.41-.93.34-.74.51-1.1l.44-.88c.18-.35.37-.69.56-1s.31-.55.47-.81.4-.65.61-1l.5-.75c.21-.3.43-.59.65-.87s.35-.46.53-.68.48-.54.72-.81.36-.4.55-.58.53-.51.8-.75.35-.33.54-.48.62-.48.94-.71l.48-.35a14.31,14.31,0,0,1,1.5-.88,17.2,17.2,0,0,1,4.64-1.52,23.5,23.5,0,0,1,5.58-.29l.53,0h0c.37,0,.76.09,1.13.13l1.26.15c.42.06.86.16,1.29.24l1.24.24c.45.1.91.22,1.36.34l1.27.33c.47.13.94.29,1.41.44l1.3.42c.48.16,1,.34,1.46.53l1.32.5,1.51.63,1.33.58,1.55.72,1.34.66,1.59.81c.45.24.9.48,1.34.73s1.09.59,1.63.91.89.52,1.33.78,1.12.66,1.68,1,.86.55,1.29.82,1.15.73,1.73,1.12l1.11.76q1.84,1.26,3.67,2.61c.39.28.77.55,1.15.84l1.63,1.26,1.42,1.12c.52.41,1,.85,1.55,1.27s1,.82,1.49,1.24,1,.86,1.5,1.3l1,.93-.09.27c-.12.32-.22.63-.34.95l-.66,1.9-.36,1.09-.57,1.76-.36,1.14c-.17.57-.35,1.14-.52,1.71l-.33,1.14c-.17.58-.33,1.15-.49,1.73l-.3,1.09c-.16.61-.32,1.22-.47,1.83-.08.32-.17.64-.24.95-.19.77-.37,1.53-.54,2.29,0,.16-.08.31-.11.47-.21.91-.4,1.82-.58,2.72l-.15.77c-.13.64-.25,1.28-.36,1.91-.06.33-.11.66-.17,1-.09.55-.19,1.1-.27,1.65-.06.35-.11.7-.16,1l-.21,1.55c0,.35-.09.7-.13,1-.06.51-.12,1-.17,1.5s-.07.69-.1,1q-.08.75-.12,1.5c0,.32-.05.64-.07,1,0,.54-.06,1.07-.08,1.6,0,.26,0,.52,0,.78,0,.78,0,1.55,0,2.3,0,1.22,0,2.43.1,3.64,0,.4.07.8.1,1.21.06.8.12,1.59.2,2.38.06.48.13,1,.2,1.43.09.71.19,1.43.31,2.13.08.5.18,1,.28,1.5.13.67.26,1.35.42,2,0,.16.06.32.1.48H109.68c-.23-1-.46-1.91-.67-2.89-.05-.21-.09-.43-.13-.64-.17-.78-.34-1.56-.49-2.35-.07-.36-.13-.72-.2-1.08-.12-.65-.24-1.29-.35-1.94-.07-.41-.13-.82-.2-1.23-.1-.61-.19-1.21-.28-1.82-.07-.43-.13-.87-.19-1.3-.08-.59-.16-1.18-.23-1.77s-.11-.89-.16-1.34-.13-1.16-.19-1.74-.09-.91-.13-1.36-.11-1.15-.15-1.73-.07-.91-.1-1.36l-.12-1.73c0-.45,0-.9-.07-1.35s0-1.15-.07-1.72,0-.9,0-1.34,0-1.15,0-1.72,0-.88,0-1.32,0-1.15,0-1.73C105.88,152.24,105.89,151.81,105.89,151.39Zm134.87-59.3h0a41.46,41.46,0,0,1,11.61,9.48l0,0c1.24,1.4,2.48,2.91,3.7,4.53a106.91,106.91,0,0,1,10.45,17.31c7.87,16.06,12.95,34.86,12.95,47.88q0,1.17-.06,2.31c0,.23,0,.45,0,.67,0,.58-.08,1.16-.14,1.73l-.06.63c-.08.76-.18,1.51-.3,2.26,0,.08,0,.17-.05.25-.11.67-.24,1.33-.38,2,0,.22-.09.44-.14.66-.13.57-.27,1.13-.42,1.7l-.15.55c-.19.69-.4,1.37-.62,2H187.25c-.22-.67-.43-1.35-.62-2l-.15-.55c-.15-.57-.29-1.13-.42-1.7-.05-.22-.1-.44-.14-.66-.14-.66-.27-1.32-.38-2,0-.08,0-.17,0-.25-.12-.75-.22-1.5-.3-2.26l-.06-.63c-.06-.57-.11-1.15-.14-1.73,0-.22,0-.44,0-.67q-.06-1.14-.06-2.31c0-2,.12-4.07.34-6.29.09-.85.2-1.72.32-2.6a128.94,128.94,0,0,1,8.25-29.94c10.46-25.91,25.53-42.65,38.41-42.65a18,18,0,0,1,6.94,1.5C239.68,91.58,240.22,91.82,240.76,92.09Zm43.08,27.68c.26-.47.53-.94.8-1.4.11-.2.23-.4.35-.6.27-.47.55-1,.84-1.41.1-.18.21-.36.32-.54l.87-1.41.3-.48.9-1.4c.1-.15.2-.3.29-.45l.93-1.38.28-.41.94-1.35.28-.39c.31-.44.63-.88.95-1.31l.28-.38,1-1.26c.09-.12.19-.24.28-.37l1-1.21.3-.38c.32-.38.63-.77.95-1.14.11-.14.23-.27.34-.4.31-.36.61-.72.92-1.06l.42-.47.84-.93c.32-.35.64-.68,1-1l.3-.32c.44-.45.88-.88,1.31-1.31l.1-.09L302,95.74l.11-.09c.41-.37.81-.74,1.22-1.09l.09-.07c.41-.36.82-.7,1.23-1l.06,0,1.27-1,0,0c.44-.33.87-.64,1.3-.94h0c5.26-3.68,10.39-5.5,15-5.13h0a18,18,0,0,1,6.54,1.91c5.33,2.68,10.67,8,15.63,15.7,1.14,1.76,2.26,3.63,3.36,5.63l0,0a112.92,112.92,0,0,1,5.2,11c6.38,15.56,10.34,33.89,10,47.46,0,1.14-.08,2.23-.17,3.29h0c-.06.76-.14,1.53-.24,2.28,0,.23-.06.46-.1.68-.08.55-.16,1.1-.26,1.65,0,.23-.08.46-.13.69-.13.67-.27,1.33-.43,2a2,2,0,0,1-.05.24c-.18.73-.38,1.46-.59,2.18l-.19.61c-.17.53-.34,1.06-.53,1.59l-.24.67c-.21.58-.44,1.17-.69,1.75l-.14.36a.36.36,0,0,0,0,.09H294.82l.09-.48c.16-.67.29-1.35.42-2,.1-.5.2-1,.29-1.5.11-.7.21-1.42.3-2.13.07-.47.14-1,.2-1.43.08-.79.14-1.58.2-2.38,0-.41.08-.81.1-1.21.07-1.21.1-2.42.1-3.64,0-.94,0-1.91-.06-2.89,0-.33,0-.66-.06-1,0-.67-.07-1.34-.12-2l-.12-1.22c-.06-.63-.11-1.25-.18-1.89-.05-.44-.11-.89-.17-1.33-.08-.62-.16-1.24-.25-1.87-.07-.46-.14-.93-.22-1.4-.1-.62-.2-1.25-.31-1.88-.08-.48-.17-1-.26-1.45s-.24-1.26-.37-1.89-.21-1-.32-1.49-.28-1.28-.42-1.92l-.36-1.51c-.16-.65-.32-1.3-.49-2-.13-.5-.26-1-.4-1.51-.18-.66-.37-1.33-.56-2l-.42-1.49-.63-2.06-.45-1.44-.72-2.17c-.15-.45-.3-.9-.46-1.35-.28-.8-.57-1.6-.86-2.4-.13-.37-.26-.74-.4-1.11q-1.31-3.51-2.79-7c-.15-.35-.31-.71-.47-1.06-.3-.7-.61-1.4-.92-2.1ZM405.27,97.56c9.25,4.47,15.15,18.9,16.18,39.6.84,16.81-1.83,35.69-6.76,49H377.41c.21-.68.38-1.37.56-2.06.11-.4.23-.79.33-1.19.18-.76.34-1.54.5-2.31.07-.34.15-.68.22-1,.17-.93.32-1.88.45-2.82,0-.19.07-.38.09-.57.15-1.14.28-2.28.37-3.44s.16-2.48.2-3.76c0-.42,0-.86,0-1.29,0-.87,0-1.74,0-2.64,0-.52,0-1,0-1.58,0-.83-.06-1.65-.11-2.49,0-.57-.07-1.15-.12-1.73-.06-.82-.12-1.65-.2-2.48-.06-.6-.12-1.2-.19-1.8q-.14-1.26-.3-2.52c-.08-.61-.17-1.22-.26-1.84-.12-.86-.26-1.73-.4-2.59-.1-.61-.2-1.22-.31-1.83-.16-.9-.34-1.82-.52-2.73-.11-.58-.22-1.15-.34-1.73-.22-1-.45-2-.69-3.05-.11-.48-.21-.95-.32-1.43-.37-1.5-.75-3-1.16-4.51,0,0,0,0,0-.07-.4-1.47-.83-2.94-1.28-4.41-.14-.48-.3-1-.45-1.45-.32-1-.64-2-1-3l-.6-1.7c-.31-.91-.63-1.81-1-2.71-.22-.59-.45-1.18-.68-1.77-.33-.86-.66-1.72-1-2.57-.24-.59-.48-1.18-.73-1.76-.35-.84-.71-1.67-1.07-2.49l-.78-1.73c-.15-.31-.28-.63-.43-.94l.16-.12c.73-.5,1.47-1,2.2-1.46l.77-.49,1.5-.93.95-.57,1.32-.77,1-.56c.41-.24.83-.46,1.24-.68l.91-.48,0,0C384.71,97.65,396.55,93.35,405.27,97.56ZM279.6,22.3c9.23-4.69,24.41-.56,41.65,11.34,15.83,10.93,30.87,27,37.44,39.87a46.84,46.84,0,0,1,4.84,16.14l-.29.18c-.75.44-1.49.89-2.24,1.36l-.79.5q-.93.59-1.86,1.2l-.5.33-.13-.18c-.51-.75-1-1.49-1.55-2.21l-.43-.59c-.52-.71-1-1.4-1.57-2.07-.13-.16-.26-.31-.38-.47-.46-.57-.91-1.12-1.37-1.66l-.44-.52c-.52-.6-1-1.17-1.57-1.74l-.55-.59c-.53-.55-1.05-1.08-1.58-1.6l-.53-.5c-.47-.44-.94-.88-1.41-1.3l-.51-.45c-.52-.45-1-.88-1.57-1.3l-.55-.44c-.56-.43-1.12-.85-1.68-1.25l-.54-.37c-.58-.4-1.17-.79-1.77-1.16l-.31-.19c-.56-.34-1.12-.66-1.69-1l-.41-.22c-.62-.33-1.24-.64-1.87-.93l-.44-.2c-.64-.28-1.29-.56-1.94-.81l-.26-.09c-.67-.25-1.34-.48-2-.68l-.12,0c-.71-.21-1.42-.4-2.14-.56l-.24-.06c-.72-.16-1.44-.3-2.17-.41l-.12,0c-.76-.11-1.51-.21-2.28-.27-8.35-.68-16.74,1.79-25,7.34a68.19,68.19,0,0,0-8.31,6.62l-.56.54-1.23,1.18-.86.87-1,1-.89.94-1,1.11c-.27.31-.55.6-.82.91-.54.63-1.09,1.27-1.63,1.92-.29.34-.57.69-.86,1L280.61,94l-.88,1.13-.91,1.2L278,97.47c-.46.63-.93,1.28-1.39,1.94l-.92,1.33c-.31.46-.63.92-.94,1.39l-.34.5-.31-.47-.59-.89c-.47-.71-.94-1.41-1.42-2.09l-.73-1c-.43-.61-.87-1.21-1.31-1.8l-.83-1.09c-.42-.54-.83-1.07-1.25-1.59s-.61-.76-.92-1.13l-.36-.44C261.18,63.39,264.43,30,279.6,22.3ZM170.68,36.45c13.1-14.25,26.09-21.2,35.62-19,7.7,1.73,15,9.89,20.54,23A123.61,123.61,0,0,1,235.17,73l-.76,0-.27,0c-.64,0-1.29-.06-1.93-.06s-1.27,0-1.9.06h-.13c-.57,0-1.13.09-1.7.15l-.38.05-1.45.22-.46.09c-.46.09-.93.18-1.39.29l-.47.11-1.4.38-.43.13c-.51.15-1,.32-1.52.5l-.29.1a42.12,42.12,0,0,0-5.53,2.48l-.09.06c-.57.3-1.13.62-1.69,1l-.28.17c-.5.31-1,.62-1.5,1l-.34.23c-.48.32-1,.65-1.45,1l-.33.24c-.5.36-1,.74-1.49,1.12l-.25.2c-.56.44-1.12.89-1.67,1.36l0,.05a69.38,69.38,0,0,0-5.25,5v0c-.55.58-1.1,1.17-1.64,1.78l-.18.21c-.49.55-1,1.11-1.46,1.69a3.11,3.11,0,0,0-.23.28c-.48.57-.95,1.15-1.42,1.74l-.21.27c-.5.63-1,1.27-1.48,1.92a.91.91,0,0,1-.11.16,110.47,110.47,0,0,0-6.24,9.41l0,.08c-.47.79-.94,1.6-1.4,2.42,0,.1-.11.2-.17.3-.42.76-.84,1.52-1.25,2.3l-.21.38c-.41.77-.81,1.56-1.21,2.35-.06.12-.12.24-.19.36-.13.27-.26.53-.4.79l-.63-.51-1.83-1.49-1.1-.88q-1.35-1-2.67-2c-.34-.26-.68-.5-1-.75l-1.76-1.27-1.21-.85-1.57-1.07-1.15-.76c-.73-.48-1.45-.94-2.17-1.39l-1.21-.75-1.61-1-1.14-.66-1.39-.77-1.1-.61-1.62-.84c-.47-.24-.93-.48-1.39-.7s-1-.5-1.5-.73l-1-.49-1.2-.54-1-.44c-.43-.19-.85-.36-1.27-.53L151,95.63l-1.35-.51-1-.35-1-.34-1-.32-.93-.29-1.45-.43-.95-.27-.93-.25-.7-.17-.46-.12c.06-.68.15-1.36.24-2,0-.31.07-.63.12-1,.08-.5.19-1,.28-1.5s.19-1.08.31-1.61.3-1.27.48-1.94l0-.09c.17-.64.36-1.3.56-2l0,0C147.76,67.73,158.51,49.69,170.68,36.45Zm-123,102.24c5.12-28.75,37.76-76,60.88-71.92C116,68.09,122,74.83,126,81.21c-.13.51-.25,1-.37,1.5v.05c-.27,1.21-.5,2.44-.7,3.67,0,.22-.08.44-.11.66s0,.38-.08.56c-.08.56-.16,1.12-.22,1.68v0c-.09.73-.16,1.46-.22,2.19h0c-.22,0-.44.08-.65.12-.52.08-1,.17-1.55.27l-1.12.25c-.52.12-1,.26-1.54.41q-.51.14-1,.3c-.56.17-1.11.38-1.65.58l-.83.31c-.81.33-1.61.69-2.39,1.09s-1.48.8-2.2,1.23l-.27.17c-.67.42-1.33.86-2,1.33l-.33.24q-.94.7-1.83,1.47l-.3.27c-.6.52-1.18,1.06-1.75,1.63l-.18.2c-.57.57-1.12,1.17-1.65,1.79l-.09.1c-.54.63-1,1.28-1.55,2l-.23.3c-.48.64-.93,1.31-1.38,2l-.25.38c-.44.68-.86,1.37-1.27,2.09l-.2.37c-.42.73-.82,1.49-1.2,2.26,0,.07-.07.14-.1.2-.38.77-.74,1.55-1.09,2.35a2.29,2.29,0,0,0-.1.23c-.35.8-.68,1.62-1,2.45l-.16.42c-.3.81-.59,1.63-.87,2.47,0,.16-.11.32-.16.48q-.41,1.26-.78,2.55c0,.13-.07.27-.11.41-.25.9-.5,1.81-.72,2.73l0,.15c-.22.91-.43,1.82-.62,2.75,0,.12-.05.24-.08.36-.18.91-.35,1.84-.51,2.77l-.09.52c-.16.91-.3,1.83-.43,2.76,0,.18-.05.35-.07.53-.13.95-.25,1.89-.35,2.85,0,.13,0,.27-.05.41q-.15,1.47-.27,2.94s0,.08,0,.12c-.08,1-.14,2-.2,3,0,.15,0,.3,0,.46,0,1-.09,1.94-.12,2.91,0,.19,0,.38,0,.57,0,1,0,1.93,0,2.89v.55c0,1,0,2,0,3,0,.13,0,.25,0,.37q0,1.47.09,2.94c0,.09,0,.18,0,.27,0,1,.09,2,.16,3l0,.51q.09,1.45.21,2.88c0,.2,0,.39,0,.59q.12,1.42.27,2.85c0,.17,0,.35,0,.52.11,1,.22,2,.34,2.92,0,.09,0,.18,0,.27.12.94.25,1.89.38,2.82,0,.12,0,.24,0,.35.14.95.29,1.88.45,2.81,0,.18,0,.35.08.52.16.91.32,1.8.49,2.69,0,.18.06.36.1.54.17.9.35,1.78.53,2.66l0,.15H67.71A47,47,0,0,1,47.73,138.69Zm399,64.44a146.68,146.68,0,0,1-2.56,19.64H23.61c-2.18-8.41-3.76-15-4.82-19.64ZM384.28,324.58c-42,38.75-96.07,60.09-152.27,60.09A215,215,0,0,1,25.53,229.77h417.1C434.23,263.89,414,297.17,384.28,324.58Z"></path><path class="cls-1" d="M164.6,341.1a157.34,157.34,0,0,1-56.87-41.75,3.5,3.5,0,0,0-5.3,4.56,164.3,164.3,0,0,0,59.4,43.62,3.39,3.39,0,0,0,1.38.29,3.5,3.5,0,0,0,1.39-6.72Z"></path><path class="cls-1" d="M208.26,134.83a3.5,3.5,0,0,0-4.67,1.65,86.26,86.26,0,0,0-8.29,39,3.51,3.51,0,0,0,3.5,3.41h.09a3.5,3.5,0,0,0,3.41-3.59,79.23,79.23,0,0,1,7.61-35.77A3.5,3.5,0,0,0,208.26,134.83Z"></path><path class="cls-1" d="M162.88,71.42a3.49,3.49,0,0,0,4.61-1.79,103.46,103.46,0,0,1,28.79-37.95,3.5,3.5,0,1,0-4.45-5.4,110.41,110.41,0,0,0-30.75,40.53A3.51,3.51,0,0,0,162.88,71.42Z"></path><path class="cls-1" d="M62.56,165.13A3.49,3.49,0,0,0,65,160.85a62.56,62.56,0,0,1,15.57-58.91,3.5,3.5,0,0,0-5-4.9,69.67,69.67,0,0,0-17.35,65.61,3.52,3.52,0,0,0,3.38,2.6A3.56,3.56,0,0,0,62.56,165.13Z"></path><path class="cls-1" d="M114.78,167.1a3.5,3.5,0,0,0,3.4,2.7,3.72,3.72,0,0,0,.81-.09,3.5,3.5,0,0,0,2.6-4.21,58.83,58.83,0,0,1,5-40,3.5,3.5,0,1,0-6.22-3.22A65.89,65.89,0,0,0,114.78,167.1Z"></path><path class="cls-1" d="M275.72,45.73a3.47,3.47,0,0,0,4.27-2.5,13.88,13.88,0,0,1,11.23-9.88,3.5,3.5,0,0,0-.9-6.94,20.84,20.84,0,0,0-17.1,15.05A3.5,3.5,0,0,0,275.72,45.73Z"></path><path class="cls-1" d="M291.1,122.9c5,6.16,6.16,10.51,6.16,10.52a3.49,3.49,0,0,0,3.41,2.71,3.61,3.61,0,0,0,.79-.09,3.49,3.49,0,0,0,2.62-4.2c-.12-.53-1.26-5-6-11.41a55.86,55.86,0,0,1,20.33-19,3.5,3.5,0,0,0-3.33-6.16,62,62,0,0,0-24.27,23.69A3.51,3.51,0,0,0,291.1,122.9Z"></path>
</g>
</g>
</g></svg></span>
      </div></footer>
  </body>
</html>