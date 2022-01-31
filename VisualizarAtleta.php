<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt-BR">
  <head>
  
  
 <?php
include_once('php/gerarFichasAtleta.php');
?>
  
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>VisualizarAtleta</title>
    <link rel="stylesheet" href="nicepage.css" media="print">
    <link rel="stylesheet" href="nicepage.css" media="screen">
	<link rel="stylesheet" href="VisualizarAtleta.css" media="print">
	<link rel="stylesheet" href="VisualizarAtleta.css" media="screen">
	<!--<link rel="stylesheet" type="text/css" media="print" href="VisualizarAtletaPrint.css"> -->
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
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="VisualizarAtleta">
    <meta name="twitter:description" content="Monte Pascoal">
    <meta property="og:title" content="VisualizarAtleta">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
    <section class="u-clearfix u-section-1" id="sec-afae">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-form-1">
          <div class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
            <div class="u-form-group u-form-name">
              <label for="name-f5dd" class="u-label">Nome do Atleta</label>
              <input type="text" id="name-f5dd" name="nomeatleta" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value= "<?php echo $_SESSION['atletanome'];?>">
            </div>
            <div class="u-form-group">
              <label for="email-f5dd" class="u-label">RG</label>
              <input placeholder="" id="email-f5dd" name="rg" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value= "<?php echo $_SESSION['atletarg'];?>">
            </div>
            <div class="u-form-group u-form-group-3">
              <label for="date-6fc0" class="u-label">Data de Nascimento</label>
              <input placeholder="" id="date-6fc0" name="datanascimento" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value= "<?php echo $_SESSION['atletanascimento'];?>">
            </div>
            <div class="u-form-group u-form-group-3">
              <label for="select-a32d" class="u-label">Posição</label>
              <div class="u-form-select-wrapper">
                <input placeholder="" id="posicao" name="posicao" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value= "<?php echo $_SESSION['atletaposicao'];?>">
              </div>
            </div>
            <div class="u-form-group u-form-group-5">
              <label for="text-1751" class="u-label">Equipe</label>
              <input type="text" placeholder="" id="text-1751" name="text" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" value= "<?php echo $_SESSION['atletanomeequipe'];?>">
            </div>
            <div class="u-align-right u-form-group u-form-submit">
              <a href="" class="u-btn u-btn-submit u-button-style u-btn-1"onClick="proximoAtleta()"><b>PRÓXIMO</b><br>
              </a>
    
            </div>
          </div>
        </div>
        <a href="" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-2" onClick="window.print()">IMPRIMIR</a>
        <a href="" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-3" onClick="anteriorAtleta()">ANTERIOR</a>
        <img class="u-image u-image-default u-preserve-proportions u-image-1" src="montepascoal/<?php echo $_SESSION['atletafoto'];?>" alt="" data-image-width="208" data-image-height="242">
      </div>	  
    </section>
    </body>
</html>