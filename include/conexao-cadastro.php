<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$bd = "bdmedicinarg";

	$mysqli = new mysqli($host, $usuario, $senha, $bd);
	If ($mysqli->connect_erro)
		echo "Falha na conexão:"
	
?> 