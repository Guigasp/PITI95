<?php
session_start();
?>

<?php 

include("conexao/conexao.php");
//print_r($_POST);

$email = mysqli_real_escape_string($conn, $_POST["Email"]);
$senha = mysqli_real_escape_string($conn, $_POST["Senha"]);


$sql = "SELECT * FROM tblogin WHERE login = '".$email. "' and senha = '".$senha."'";

$retorno_login = mysqli_query($conn, $sql);


if(mysqli_num_rows($retorno_login) != 0){
	echo ("");

	$dados_de_retorno = mysqli_fetch_array($retorno_login);
	echo ("<br>");
	
	foreach ($dados_de_retorno as $key => $value) {
		if (!is_numeric($key))
		{
			echo ($key . " -> " .$value . "<br>");
			$_SESSION[$key] = $value;
		}
		header("location:home.php");
	
	}
}else {
	$_SESSION["ERRO"] = "Usuario Invalido";
	header("location:index.php");
}


/* ========================== As merda começa daqui pra baixo ======================*/
// ok mas aqui ainda nao esta muito bom ainda se pah tem coisas pra arrumar aqui ainda
// ou mas como faz so pra exiber os resultado porq nem isso ta exibendo 
/*$sql = "SELECT * FROM tbpessoas";


	echo $sqllogin;
	$retorno_login2 = mysqli_query($conn, $sql);


if(mysqli_num_rows($retorno_login2) != 0){
	echo ("");

	$dados_de_retorno2 = mysqli_fetch_array($retorno_login2);
	echo $dados_de_retorno2;

	}
*/



//$email = $_POST["Email"];

//$senha = $_POST["Senha"];


//echo ("<br>");
//echo ("Email = ". $email);
//echo ("Senha = ". $senha);

//echo "<hr>";

//foreach ($_POST as $mesa) 
//{
	//echo ("<br>");
	//echo ("<br>");
	//echo ("$mesa");
//}

//echo "<hr>";
//foreach ($_POST as $pasta => $mesa) 
//{
//	echo ("<br>");
//	echo ("<br>");
//	echo ("$pasta");
//	echo ("<br>");
//	echo ("$mesa");
//}
//echo "<hr>";
 ?>