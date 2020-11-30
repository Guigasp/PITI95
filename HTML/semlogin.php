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
		    <a class="navbar-brand" href="semlogin.php"><div id="demotext">Eco Maps</div></a>
		     </div>


		   <center>
		   	<form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
		    </form>
		   </center>

	
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
			<div class="btn-group" style="margin-left: 150px;">
				<a type="button" class="btn btn-success" href="index.php" style="text-transform: capitalize;">Entrar
				</a>

		
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
		  <a href="semlogin.php" class="btn light"><p class="menu-verdical"> Inicio </p></a>
		  <a href="mapasemlogin.php" class="btn light"><p class="menu-verdical">Mapa</p></a>

		</div>

</div>


<!-- <iframe style="float: left; margin-left: 80px;" ></iframe> -->
	

	

	<div id="titulo">Quem somos ?</div>
<br>	
	<div id="texto"> <img src="logo3.png" height="150" width=" 150" style="float: right;">Somos uma empresa chamada de Eco Maps foi fundada no ano de 2019  por André, Antônio, Guilherme, Mel e Wesley. Com a ideia de melhorar a forma que o lixo eletrônico é descartado, visando facilitar a comunicação entre as pessoas que tem lixos eletrônicos em casa ou em qualquer ambiente, com o ponto de descarte de lixos eletrônicos mais próximo da sua localização.</div>

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