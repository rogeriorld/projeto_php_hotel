<?php
	if(!(isset($_GET['pagina']))) {
		//$_GET['pagina'] = 1;
		echo "<script>";
		echo "window.location = '?pagina=1';";
		echo "</script>";
	}

	require("header.php");   
?>
<!-- Div Login -->
<div id="lean_overlay" style="display: none; opacity: 0.45"></div>
<div class="loginmodal" style="display: none; position: absolute; z-index: 100; margin: 0 auto; background: #FFF; width: 300px; height: 300px; padding: 10px;">
    <h4>Login</h4>
    <form id="loginform" name="loginform" method="post" action="login.php">
      <label for="username">Nome:</label>
      <input type="text" name="username" id="username" class="txtfield" tabindex="1">
      
      <label for="password">Senha:</label>
      <input type="password" name="password" id="password" class="txtfield" tabindex="2">
      
      <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Log In" tabindex="3"></div>
    </form>
  </div>

<div class="registermodal" style="display: none; position: absolute; z-index: 100; margin: 0 auto; background: #FFF; width: 380px; height: 520px; padding: 10px;">
  <h4>Cadastre-se</h4>
		
    <form id="loginform" name="cadastroform" method="post" action="continuaCadastro.php">
      
      <input placeholder="Digite seu nome" type="text" name="nome" id="nome" class="txtfield" tabindex="1" style="display: inline;">
	  
	 
      <input  placeholder="Digite seu documento" type="text" name="documento" id="documento" class="txtfield" tabindex="1" style="display: inline;">
	  
	<input type="text" placeholder="Digite seu email" name="email" id="email" tabindex="1" class="txtfield" onblur="validacaoEmail(cadastroform.email)" onLoad="validaForm()">  
	  <div id="msgemail"></div>
	  
	   <label for="Username">Username</label>
      <input type="text" name="username" id="username" class="txtfield" tabindex="1">
	  
	  <label for="password">Senha</label>
      <input type="password" name="password" id="password" class="txtfield" tabindex="1">
	  
	  <label for="password_confirmation">Digite novamente a senha:</label>
      <input type="password" name="password_confirmation" id="password_confirmation" class="txtfield" tabindex="1" 
	  onblur="validarSenha()" onLoad="validaForm()">
	  <div id="msgpass"></div>
	  
	  <div class="center" id="btn_submit"><input type="submit" name="loginbtn" id="loginbtn" class="btn btn-primary enabled" value="Cadastrar" tabindex="3" onsubmit="false"><div id="errors_notice"></div>

	  </div>
    </form>
</div>

	<body>
		<?php
			require("nav.php");

			switch ($_GET['pagina']) {
				case '1':
					require('./slide/slide.html');
		?>
		<div class='descricao'>
				<div class='border'>
					<div class='box'>
						<p>O <strong>Hotel Ferian Palace</strong> é um luxuoso e famoso hotel localizado em frente à Praia do Leblon, na cidade do Rio de Janeiro, Brasil.</p>
						<p>Na atualidade, o Ferian Palace permanece como um dos mais importantes estabelecimentos hoteleiros da cidade e do Brasil, disponibilizando duzentos e vinte e seis apartamentos e suítes:
						 cento e quarenta e oito no prédio principal e setenta e oito no anexo, distribuídos em uma área de onze mil metros quadrados.</p>
						<p>O Ferian Palace é bastante conhecido em todo o Brasil por hospedar as celebridades internacionais que visitam a cidade do Rio de Janeiro. Além disso, o 
						hotel também é conhecido por realizar alguns dos mais badalados eventos sociais do Brasil, aparecendo frequentemente nas mais renomadas publicações e colunas sociais do país</p>
					</div>
				</div>
			</div>
		<?php
					break;
				case '2':
					require ('quartos.php');
					break;
				case '3':
					require ('servicos.php');
					break;
				case '4':
					require ('eventos.php');
					break;
				case '5':
					require ('contato.php');
					break;
				
				default:
					echo "Página inexistente";
					break;
			}
		
			
			?>
			
		<?php
			require("footer.php");
		?>

		<script type="text/javascript">
		$(document).ready(function(){
		jQuery.fn.center = function ()
		{
		    this.css("position","fixed");
		    this.css("top", ($(window).height() / 2) - (this.outerHeight() / 2));
		    this.css("left", ($(window).width() / 2) - (this.outerWidth() / 2));
		    return this;
		}

	//Abre DIV Login
	$( ".entrar" ).click(function() {
		$( "#lean_overlay" ).show();
		$( ".loginmodal" ).show();
		$( ".loginmodal" ).center();
		$(window).resize(function(){
   			$('.loginmodal').center();
   			});
		});

	//Abre DIV Login
	$( ".registrar" ).click(function() {
		$( "#lean_overlay" ).show();
		$( ".registermodal" ).show();
		$( ".registermodal" ).center();
		$(window).resize(function(){
   			$('.registermodal').center();
   			});
		});

	//Fecha DIV Login
	$( "#lean_overlay" ).click(function() {
		$( ".loginmodal" ).hide();
		$( ".registermodal" ).hide();
		$( "#lean_overlay" ).hide();
	});

	
	//Muda URL
    $('nav li a').click(function(e) {
    	var $url = ($(this)[0]);
		window.location = $url;
		e.preventDefault();
	});

    // Altera class de LI Active
	$("li").removeClass("active"); //remove as classes active
	$urlAtual = window.location;
	$('li a').each(function() {
		if ($urlAtual == ($(this).prop("href"))) {
			$(this).closest('li').addClass('active'); //marca Li como active
		};
	});		
});
	</script>
	
	</body>
	
	
	
</html>