<?php
	require("header.php");   
?>
<!-- Div Login -->
<div id="lean_overlay" style="display: none; opacity: 0.45;"></div>
<div class="loginmodal" style="display: none;">
    <h1>User Login</h1>
    <form id="loginform" name="loginform" method="post" action="index.html">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" class="txtfield" tabindex="1">
      
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" class="txtfield" tabindex="2">
      
      <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Log In" tabindex="3"></div>
    </form>
  </div>

	<body>
		<?php
			require("nav.php");
		
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
			require("footer.php");
		?>
	
	</body>

	<script>
	$( ".entrar" ).click(function() {
		$( "#lean_overlay" ).show();
		$( ".loginmodal" ).show();
		});

	</script>
</html>