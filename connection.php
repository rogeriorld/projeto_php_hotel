<?php $serverName = "regulus";
    $user = "BD13400";
    $pwd = "BD13400";
    $database="BD13400";

    $connectionInfo = array( "Database"=>$database,
		                          "PWD"=>$pwd, "UID"=>$user);


    $conexao = sqlsrv_connect($serverName, $connectionInfo);
	
	?>