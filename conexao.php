<?php
	
	try {
		$conectar = mysqli_connect("localhost","root","","walscvgm_sigma");	
	} catch (Exception $e) {
		echo "Erro na conexao com a base de dados!".PHP_OEL;
		echo "Deteccao do erro: ".mysqli_connect_errno().PHP_OEL;
	}
?>

