<?php 

include("conexao/conexao.php");

session_start();

              $sql = "SELECT * FROM tbpessoas";

              $retornoEstados = mysqli_query($conn, $sql);

              if(mysqli_num_rows($retornoEstados)!= 0){
                 
                 while ($todosEstados = mysqli_fetch_array($retornoEstados))
                {
					$cep = $todosEstados['CEP'];
				    $sobrenome = $todosEstados['Sobrenome'];
				    $idpessoa = $todosEstados['idPessoa'];
				    $email = $todosEstados['Email'];
				    $cidade = $todosEstados['Cidade'];
				    $nome = $todosEstados['Nome'];
				                    }
              }

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Pefil</title>
</head>
<body>


<!DOCTYPE html>
<html>
<head>
		<title> Projeto Integrador</title>
		
		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="CMD.css">

</head>
<body>

<div id="menunulo">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="" id="" style=" margin-right: 100px">
		    <a class="navbar-brand" href="home.php"><div id="demotext">Eco Maps</div></a>
		     </div>


		   <center>
		   	<form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
		    </form>
		   </center>

	
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
			<div class="btn-group" style="margin-left: 150px;">
				<button type="button" class="btn btn-success" style="text-transform: capitalize;
				
				">
					<?php echo ($_SESSION['Nome']); ?>
				</button>

				<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="sr-only">Dropdown</span>
				</button>
					
					<!-- Atenção Arrrumar o menu nas seguinte ordem; Perfil > FAQ > .div. > sair -->
				<div class="dropdown-menu" style=""> 
				    <a class="dropdown-item" href="perfil.php">Perfil</a>
				    <div class="dropdown-divider"></div>
				  	<a class="dropdown-item" href="index.php">Sair</a>

				   
			  	</div>
			</div>
		</ul>
	</nav>
</div>	


<div id="master">
	
</div>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li date-target="#myCarousel" date-slide-to="0" active></li>
		<li date-target="#myCarousel" date-slide-to="1"></li>	
		<li date-target="#myCarousel" date-slide-to="2"></li>
		<li date-target="#myCarousel" date-slide-to="3"></li>
	</ol>


	<div class="carousel-inner" style=" margin-top: 0px;">
		<div class="item active">
			<img src="img1.jpg" alt="0" style="width: 100%; height: 400px;">
		</div>

		<div class="item">
			<img src="img2.png" alt="1" style="width: 100%; height: 400px;">
		</div>
		
		<div class="item">
			<img src="img3.jpg" alt="2" style="width: 100%; height: 400px;">
		</div>

		<div class="item">
			<img src="img4.png" alt="2" style="width: 100%; height: 400px;">
		</div>
	</div>

		<a href="#myCarousel" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>

		<a href="#myCarousel" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

</div>


<!-- Menu -->




<div id="master2">

<div id="estrutura">
	
	<style>
	.vertical-menu {
	  width: 200px;
	}

	.vertical-menu a {
	  background-color: #F8F9FA;
	  color: black;
	  display: block;
	  padding: 12px;
	  text-decoration: none;
	}

	.vertical-menu a:hover {
	  background-color: #ccc;
	}

	.vertical-menu a.active {
	  background-color: #4CAF50;
	  color: white;
	}
	</style>
		<div class="vertical-menu">
		  <a href="home.php" class="btn light"><p class="menu-verdical"> Inicio </p></a>
		  <a href="trabalho.php" class="btn light"><p class="menu-verdical">Trabalho</p></a>
		  <a href="mapa.php" class="btn light"><p class="menu-verdical">Mapa</p></a>
		  <a href="locais.php" class="btn light"><p class="menu-verdical">Locais</p></a>

		</div>

</div>


<!-- <iframe style="float: left; margin-left: 80px;" ></iframe> -->
	

	

	<div id="titulo">Perfil </div>
<br>	
	<div class="info-base"> 

			<img src="perfil.jpg" height="150" width="150" style=" margin-top: 30px;" > 	
			<br>
			<?php echo "<b>#067".$idpessoa."</b>"; ?>
			<br>
<hr>

<table class="table table-bordered">
  <h4>Informação</h4>

    <tr>
      <th scope="row" style="text-align: center;">Nome</th>
      <td><?php echo $nome . " " . $sobrenome; ?></td>
    </tr>
    <tr>
      <th scope="row" style="text-align: center;">E-mail</th>
      <td><?php echo $email; ?></td>
    </tr>
    <tr>
      <th scope="row" style="text-align: center;">Cidade</th>
      <td><?php echo $cidade; ?></td>
    </tr>
    <tr>
      <th scope="row" style="text-align: center;">CEP</th>
      <td><?php echo $cep; ?></td>
    </tr>
  </tbody>
</table>

<h4>Serviços</h4>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col" style="text-align: center;">Trabalho</th>
      <th scope="col" style="text-align: center;">Tempo</th>
      <th scope="col" style="text-align: center;">Tipo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><b>De:</b> Senac-Largo Treze<br> <b>Para:</b> Av. de Pinedo, Socorro, SP</td>
      <td>1 <b> H</b> : 00 <b>M</b></td>
      <td>Material Reciclavel <br>(Em Geral)</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td style="color: red">Nenhum serviço concluido</td>
      <td style="color: red">0 <b> H</b> : 00 <b>M</b></td>
      <td style="color: red">-</td>
    </tr>

  </tbody>
</table>

<br>
</div>
</div>


<!-- ================================================> Link <===========================================  -->

<!--  	echo "<div class='perfil' style='float: left;'>";
	 	echo "#0023".($idpessoa);
	 	echo "</div>";
	 	echo "<br>";
	1 	echo ($nome);
	 	echo "<br>";
	2	echo ($sobrenome);
		echo "<br>";
	3	echo ($email);
		echo "<br>";
	4	echo ($cidade);
		echo "<br>";
	5 	echo ($cep); -->

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>












</body>
</html>