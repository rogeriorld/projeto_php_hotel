<?php
	session_start();
echo $_SESSION['username'];
echo $_SESSION['password'];
echo $_SESSION['nome'];
echo $_SESSION['documento'];
echo $_SESSION['email'];


	require("connection.php");

	  if (!($conexao)) {
	  		echo "Falha na conexão com o banco de dados";
	  } else {
	  	echo "TEste";
	  	$stmt = "INSERT INTO hUsuario (username,senha,nivelDePrivilegio)";
	    $stmt .= " values ('".$_SESSION['username']."','".md5($_SESSION['password'])."',1)";
		echo "$stmt";	
		$stmt = sqlsrv_query( $conexao, $stmt);
		echo "$stmt";	
		 if($stmt){ 	
		 echo "$stmt";	 
		
		$stmt2 = "INSERT INTO hCliente (idUsername, nome,";
		$stmt2 .="documento, dataNascimento, sexo, email, telefone, ";
		$stmt2 .="celular, endereco, bairro, cidade, pais, UF)";
		$stmt2 .=" values('".$_SESSION['username']."', '".$_SESSION['nome']."','";
		$stmt2 .=$_SESSION['documento']."','".$_POST['dataNasc']."','".$_POST['sexo']."','".$_SESSION['email']."','".$_POST['telefone'];
		$stmt2 .="','".$_POST['celular']."','".$_POST['endereco']."','".$_POST['bairro']."','".$_POST['cidade']."','".$_POST['pais'];
		$stmt2 .="','".$_POST['estado']."')";		
		
		
		$stmt2 = sqlsrv_query( $conexao, $stmt2);
		sqlsrv_free_stmt( $stmt);
		
			if($stmt2){
			  echo "Cadastro realizado com sucesso";
			  sqlsrv_free_stmt( $stmt2);
			}else{
			  echo "Falha no Cadastro";
			}
			
	  }
	  
	  
	  
	  sqlsrv_close( $conexao);
	  }
     ?>