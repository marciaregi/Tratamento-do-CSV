<?php error_reporting(E_ALL); ?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <title>Carregar CSV</title>
</head>
<style type="text/css">
	.barra {  
  background-color: rgb(0, 159, 163);
  top: 0px;
  left: 0px;
  right: 0px;
  height: 60px;
}
</style>
<body>
	<div class="barra"></div>

<h1 style="margin: 40px 10px 40px 300px;">Painel SIGELU Maricá - Tratamento do CSV</h1>
  <div id="container">
  	<p>Carregue o arquivo CSV.</p>
    <div id="form-box">
    	<br>
			<form action="tabela_01.php" method="post" enctype="multipart/form-data">
				<input type="file" name="file" style="margin: 0px 0px 20px 40px;" >
				<input type="submit" name="sub" value="Entrevista" class="btn btn-primary mb-2" style="background-color: rgb(0, 159, 163);">
			</form>
			<form action="tabela_02.php" method="post" enctype="multipart/form-data">
					<input type="file" name="file" style="margin: 0px 0px 20px 40px;">
					<input type="submit" name="sub" value="Entrevistados" class="btn btn-primary mb-2" style="background-color: rgb(0, 159, 163);">
			</form>
      </form>
    </div>
  </div>
  <script src="js/main.js"></script>
</body>

</html>










