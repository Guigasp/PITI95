
<?php 
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$bd = "login";

	$conn = mysqli_connect($servidor, $usuario, $senha, $bd);

	if (!$conn) {
		die(" Erro MySQL Connect: " . mysqli_connect_error() . " - " . mysqli_connect_errno());
	} 
	else 
	{
		echo ("");
	}

?>