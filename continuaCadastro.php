<?php
	include_once('config.inc');
	session_start();
	echo $_SESSION['username'] = $_POST['username'];
	echo $_SESSION['password'] = $_POST['password'];
	echo $_SESSION['nome'] = $_POST['nome'];
	echo $_SESSION['documento'] = $_POST['documento'];
	echo $_SESSION['email'] = $_POST['email'];
?>
	<div style="width:300px;">
		<h3>Finalizando cadastro:</h3>
	 <form id="loginform" name="cadastroform" method="post" action="confirmaCadastro.php">
	 <label for="dataNasc">Nascimento:</label>
      <input type="date" name="dataNasc" id="dataNasc" class="txtfield" tabindex="1" onFocus="MascaraData(form1.data);">
	  
	  <label for="sexo" style="display: inline;">Sexo:</label>
      <select name="sexo" id="sexo" class="txtfield">
	  <option value="M">Masculino
	  <option value="F">Feminino
	  </select>
	  <input placeholder="Digite seu telefone" type="text" name="telefone" id="telefone" class="txtfield" tabindex="1" >
	   
	   <input type="text" placeholder="Digite seu celular" name="celular" id="celular" class="txtfield" tabindex="1">
	   
	   
      <input type="text" placeholder="Endereço (Rua, número)" name="endereco" id="endereco" class="txtfield" tabindex="1">
	  
	  <label for="pais" >País</label>
	  <select name="pais" id="pais" class="txtfield">
	  	<?php 
	  require("connection.php");
	  if($conexao){
	  $stmt = "SELECT * FROM hpaises";
	  echo $x;
	  $stmt = sqlsrv_query( $conexao, $stmt);
	  if($stmt){
	  while(sqlsrv_fetch($stmt)){echo "<option value='".sqlsrv_get_field( $stmt, 0)."'>".sqlsrv_get_field( $stmt, 1);}
	  }}else{ echo "Falha na conexão com o banco de dados";}
	  sqlsrv_free_stmt( $stmt);
	  sqlsrv_close( $conexao);
	  
	  ?>
	  </select>
	  
	  <label for="Estado">Estado</label>
      <select name="estado" id="estado" class="txtfield">
	  <?php 
	  require("connection.php");
	  if($conexao){	  
	  $stmt = 'SELECT * FROM hUF';
	  $stmt = sqlsrv_query( $conexao, $stmt);
	  if($stmt){
	  while(sqlsrv_fetch($stmt)){echo "<option value='".sqlsrv_get_field( $stmt, 0)."'>".sqlsrv_get_field( $stmt, 1);}
	  }}else{ echo "Falha na conexão com o banco de dados";}
	  sqlsrv_free_stmt( $stmt);
	  sqlsrv_close( $conexao);
	  
	  ?>
	  </select>
	  
	  <label for="cidade" >Cidade</label>
	   <select name="cidade" id="cidade" class="txtfield"> 
	  <?php 
	  require("connection.php");
	  if($conexao){
	  $stmt = "SELECT * FROM hCidade";
	  $stmt = sqlsrv_query( $conexao, $stmt);
	  if($stmt){
	  while(sqlsrv_fetch($stmt)){echo "<option value='".sqlsrv_get_field( $stmt, 0)."'>".sqlsrv_get_field( $stmt, 1);}
	  }}else{ echo "Falha na conexão com o banco de dados";}
	  sqlsrv_free_stmt( $stmt);
	  sqlsrv_close( $conexao);
	  
	  ?>
	  </select>
	  
	  <label for="bairro" >Bairro</label>
	  <select name="bairro" id="bairro" class="txtfield"> 
	  <?php 
	  require("connection.php");
	  if($conexao){
	  $x = "<script>$(‘#cidade option:selected’).val();</script>";
	  $stmt = "SELECT * FROM hBairro";
	  echo $x;
	  $stmt = sqlsrv_query( $conexao, $stmt);
	  if($stmt){
	  while(sqlsrv_fetch($stmt)){echo "<option value='".sqlsrv_get_field( $stmt, 0)."'>".sqlsrv_get_field( $stmt, 1);}
	  }}else{ echo "Falha na conexão com o banco de dados";}
	  sqlsrv_free_stmt( $stmt);
	  sqlsrv_close( $conexao);
	  
	  ?>
	  </select>
<div class="center" id="btn_submit"><input type="submit" name="loginbtn" id="loginbtn" class="btn btn-primary enabled" value="Finalizar" tabindex="3" onsubmit="false">
	</form>
</div>