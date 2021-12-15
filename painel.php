<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
  
  <?php
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
simplesmente não fazer o login e digitar na barra de endereço do seu navegador
o caminho para a página principal do site (sistema), burlando assim a obrigação de
fazer um login, com isso se ele não estiver feito o login não será criado a session,
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:Login.php');
  }

$logado = $_SESSION['login'];
$id = $_SESSION['id'];
?> 
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="painel.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.1.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página Inicial">
    <meta property="og:type" content="website">
	
	
	
	
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-1947"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Inicio.html" style="padding: 10px 20px;">Inicio</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="login.php" style="padding: 10px 20px;">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="CadastroEquipe.html" style="padding: 10px 20px;">Cadastre-se</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Sobre.html" style="padding: 10px 20px;">Sobre</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Página-Inicial.html">Página Inicial</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Sobre.html">Sobre</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-cb09">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.me" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">SAIR</a>
        <a href="https://nicepage.me" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-2">Editar equipe</a>
        <a href="https://nicepage.me" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-3">Cadastrar novo atleta</a>
        <h4 class="u-text u-text-1">
          <span style="font-size: 1.25rem;">Bem Vindo: Nome da Equipe&nbsp;<br>Atletas cadastrados:&nbsp; 
          </span>
          <br>
        </h4>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-bd8d">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-image u-layout-cell u-size-30 u-image-1" data-image-width="695" data-image-height="410">
                <div class="u-container-layout u-container-layout-1"></div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-bottom-sm u-valign-bottom-xs u-container-layout-2">
                  <h4 class="u-text u-text-default u-text-1">Atletas Inscritos:</h4>
                  <ul class="u-text u-text-2">
                    <li>
                      <div class="class u-list-icon"></div>Sample Item 1
                    </li>
                    <li>
                      <div class="class u-list-icon"></div>Sample Item 2
                    </li>
                    <li>
                      <div class="class u-list-icon"></div>Sample Item 3
                    </li>
                  </ul>
                  <div class="u-form u-form-1">
                    <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
                      <input type="hidden" id="siteId" name="siteId" value="84905310">
                      <input type="hidden" id="pageId" name="pageId" value="48984769">
                      <div class="u-form-group u-form-name">
                        <label for="name-f290" class="u-form-control-hidden u-label"></label>
                        <input type="text" placeholder="Insira seu Nome" id="name-f290" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                      </div>
                      <div class="u-align-center u-form-group u-form-submit">
                        <a href="#" class="u-btn u-btn-submit u-button-style">Editar Atleta</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                      <div class="u-form-send-message u-form-send-success"> Obrigado! A sua mensagem foi enviada. </div>
                      <div class="u-form-send-error u-form-send-message"> Não foi possível enviar a sua mensagem. Por favor, corrija os erros e tente novamente. </div>
                      <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-337c"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Amostra de texto. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  </body>
</html>