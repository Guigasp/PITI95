<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="style.css">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>

	<div id="borda">
		<fieldset>
			<th> <center> Bem  Vindo</center>  </th>
			<th> <center> Eco Maps</center></th>
		</fieldset>

	</div>

<form  action="black.php" method="POST">
	
	<div id="login">
		<form>
			<br>
			<center>
				<img style="" src="logo3.png" alt="some text" width=200 height=200>
			</center>
			<br>
			<p class="letra">
				Por favor <b><a href="cadastro.php">Registre-se</a></b> ou <b><a href="semlogin.php">Visite</a>
			</p>
	
		    <div class="input-group">
			    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			    <input id="email" type="text" class="form-control" name="Email" placeholder="Email">
		    </div>

		<br>

		    <div class="input-group">
			   	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			   	<input id="password" type="password" class="form-control" name="Senha" placeholder="Password">
	        </div>

		<br>

			<nav class="nav" style="float: left;" >
					<input style="" type="submit" value="Entrar" class="nav-link active" href="pag01.php">
			</nav>	

				<?php
					if (isset($_SESSION["ERRO"])) {
						echo ("<span class='invalido'>");
						echo ($_SESSION["ERRO"]);
							unset($_SESSION["ERRO"]);
						echo "</span>";		
					}
				?>
		<br>
		<br>
		<br>
		</form>
	</div>
</form>

<div id="info">
	<h3 class="texto2">Reciclagem qual a importância:	</h3>
		<p class="texto">
			Reciclagem é o processo em que há a transformação do resíduo sólido que não seria aproveitado, com mudanças em seus estados físico, físico-químico ou biológico, de modo a atribuir características ao resíduo para que ele se torne novamente matéria-prima ou produto, segundo a Política Nacional de Resíduos Sólidos (PNRS).
		</p>
			<img style="display: block; margin-left: auto; margin-right: auto" src="Recilcagem.png" alt="some text" width=250 height=150>
</div>



</body>
</html>





