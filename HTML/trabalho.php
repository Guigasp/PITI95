<?php 
session_start()

 ?>

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
				<button type="button" class="btn btn-success" style="text-transform: capitalize;">
					<?php echo ($_SESSION['nome']); ?>
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
	

	

	<div id="titulo">Trabalho Disponivel </div>
<br>	
	<div id="texto-trabalho">

		<div class="container">
	<div id="caixa">
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<th>Trabalho</th>
			<th>Duração</th>
			<th>Material</th>
		</tr>
		<tr class="active">
			<td><b>De</b> Osasco <b>Para</b> São Paulo </td>
			<td>1Horas 37 Minutos</td>
			<td>Materiais Resiclavel (Em geral)</td>
		</tr>
		<tr class="active">
			<td><b>De</b> Grajaú  <b>Para</b> Parelheiros  </td>
			<td>33 Minutos</td>
			<td>material eletronico</td>
		</tr>
		<tr class="active">
			<td><b>De</b> Santo amaro <b>Para</b> interlagos  </td>
			<td> 20 Minutos</td>
			<td>alumínio</td>
		</tr>
		<tr class="active">
			<td><b>De</b> Capão redondo <b>Para</b> Vila andrade </td>
			<td>24 Minutos</td>
			<td>Papel/papelão</td>
		</tr>
		<tr class="active">
			<td><b>De</b> Vila leopoldina <b>Para</b> Lapa  </td>
			<td>9 Minutos</td>
			<td>materiais em geral</td>
		</tr>
		<tr class="active">
			<td><b>De</b> Anhangabaú <b>Para</b> varzea paulista </td>
			<td>16 Minutos</td>
			<td>material eletronico</td>
		</tr>
		<tr class="active">
			<td><b>De</b> Capão redondo <b>Para</b> socorro  </td>
			<td>17 Minutos</td>
			<td>papelão</td>
		</tr>
		<tr class="active">
			<td><b>De</b> jardim angela <b>Para</b> guarapiranga </td>
			<td>18 Minutos</td>
			<td> aluminio</td>
		</tr>
		<tr class="active">
			<td><b>De</b> Parque Independência <b>Para</b> capão redondo </td>
			<td>54 Minutos</td>
			<td>papelão/aluminio</td>
		</tr>
		<tr class="active">
			<td><b>De</b> São bernado do campo <b>Para</b> diadema </td>
			<td>1Horas 10 Minutos</td>
			<td>Materiais Resiclavel (Em geral)</td>
		</tr>
	</div>
	</table>
</div>

	</div>



</div>

<div id="final">
	
</div>

<!-- ================================================> Link <===========================================  -->



		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>