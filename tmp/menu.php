<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	header('Content-Type: text/html; charset=UTF-8');
	date_default_timezone_set('America/Santiago');
	
?>

<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">

  <!--  boostrap -->
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<!-- font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  
  <title>Listado</title>
  <style>
	body{
		font-family:arial
	}
  </style>
 </head>
 <body>
	
	<div class='container'>
		<div class='row'>
			<div class='col'>
				<img src='https://www.imodigital.cl/source/img/300_mailLogoIMO_horizontal.png'>
				<br>
				<h5>Menu Principal</h5>
				
			</div>
		</div>


		<div class='row'>
			<div class='col'>
				<a href="paises_listado.php">Paises</a><br>
				<a href="ciudades_listado.php">Ciudades</a><br>
				<a href="funcionarios_listado.php">Funcionarios</a><br><br>
				<a href="login.php">Salir</a><br>
			</div>
		</div>
	</div>
  
 </body>
</html>

