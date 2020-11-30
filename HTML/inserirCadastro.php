<?php

	print_r($_POST);

	include("conexao/conexao.php");

		 $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
	$sobrenome = mysqli_real_escape_string($conn, $_POST["sobrenome"]);
		$email = mysqli_real_escape_string($conn, $_POST["email"]);
	   $cidade = mysqli_real_escape_string($conn, $_POST["cidade"]);
		  $cep = mysqli_real_escape_string($conn, $_POST["cep"]);
		$senha = mysqli_real_escape_string($conn, $_POST["senha"]);

	 $sql= "INSERT INTO tbpessoas
	 		(Nome,
	 		Sobrenome,
	 		Email,
	 		Cidade,
	 		CEP
	 		)
	 		VALUES
	 		(
	 		'".$nome."',
	 		'".$sobrenome."',
	 		'".$email."',
	 		'".$cidade."',
	 		'".$cep."'
	 		)
	 		";

			if(!mysqli_query($conn, $sql)){
	 			//echo("Erro: ". mysqli_errno($conn)." - " mysqli_error($conn));
	 			echo "Erro";
	 		}

	 		$id = mysqli_insert_id($conn);

	 		echo"<br><br>";
	 		echo ($id);

		$sqllogin = "
			INSERT INTO tblogin
			(Nome,
			login,
			senha,
			idPessoa_Login
			)
			VALUES 
			(
			'".$nome."',
			'".$email."',
			'".$senha."',
			'".$id."'
			)
			";

			if(!mysqli_query($conn, $sqllogin)){
	 			echo("Erro: ". mysqli_errno($conn));
	 			echo "Erro";
	 			echo("<br> SQL: ".$sqllogin);
	 		}

	 		echo"<br><br>";
	 		echo ("OK,CADASTRADO");

	 		header("location:index.php");


?>