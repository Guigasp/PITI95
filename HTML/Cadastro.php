<?php
    session_start();
  include_once("conexao/conexao.php");


      if(isset($_SESSION['atualiza'])){
          //echo("Atualizar");
          //unset($_SESSION['atualiza']);
          $sql = "SELECT * FROM tbpessoas WHERE idPessoa = ".$_SESSION['idPessoa_Login'];
          //echo ($sql);
          if(!$resultado = mysqli_query($conn, $sql))
          {
            echo("erro");
          }
          $dados_de_Retorno = mysqli_fetch_array($resultado);
      }else{
        //echo("cadastre-se");
      }
      ?> 
<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="cstyle.css">

</head>
<body>



<center>
  <div class="topo">
     <p class="register">Cadastrar</p>
  </div>
</center>



<form action="InserirCadastro.php" method="POST" class="needs-validation" novalidate>


<center>
<div class="info">

  <div class="form-row">
    <div class="col-lg-4% mb-3%">
      <label for="validationDefault01">Primeiro Nome</label>
      <input type="text" style="text-transform: capitalize;" name="nome" value=""class="form-control" id="validationDefault01" placeholder="Nome"required>
    </div>
     </div>

     <div class="form-row">
    <div class="col-lg-4% mb-3%">
      <label for="validationDefault02">Sobrenome</label>
      <input type="text" style="text-transform: capitalize;" name="sobrenome" class="form-control" id="validationDefault02" placeholder="Sobrenome" value="" required>
    </div>
  </div>

 <div class="form-row">
 <div class="col-lg-3% mb-3%">
      <label for="validationDefault04">E-mail</label>
      <input type="text"  name="email" class="form-control" id="validationDefault04" placeholder="Email" required>
    </div>
  </div>
<br>
 <div class="form-row">
    <div class="col-sm-6 " style="float: left;">
      <label for="validationDefaultUsername">CEP</label>
      <div class="input-group">
        <input type="text" name="cep" class="form-control" id="validationDefaultUsername" placeholder="CEP" required>
      </div>
    </div>
 </div>





    <div class="form-row">
    <div class="col-sm-6 ">
      <label for="validationDefault03">Cidade</label>
          <select name="cidade" class="form-control" id="inlineFormCustomSelect">
            <option value="0">Escolha</option>
            <?php

              $sql = "
                  SELECT * FROM tbestados
                ORDER BY Sigla
                    ";

              $retornoEstados = mysqli_query($conn, $sql);

              if(mysqli_num_rows($retornoEstados) !=0){
                 
                 while ($todosEstados = mysqli_fetch_array($retornoEstados))
                  {
                    echo(" <option value= '".$todosEstados["Sigla"]."'>".$todosEstados["Nome"]."</option>");
                  }
              }
            ?>
          </select>
    </div>
<?php 
  echo $todosEstados;
?>

<br>
    <div class="col-md-6% mb-3%">
      <label for="validationDefault05">Senha</label>
      <input type="password" name="senha" class="form-control" id="validationDefault05" placeholder="Senha" required>
    </div>
  </div>

 <div class="col-md-6% mb-3%">
      <label for="validationDefault05">Confirma Senha</label>
      <input type="password" name="senha2" class="form-control" id="validationDefault05" placeholder="Confirma Senha" required>
    </div>



  
 
<br>

  <button class="btn btn-primary" type="submit">Cadastrar</button>



</div>


</div>


</form>
</div>

</body>
</html>
