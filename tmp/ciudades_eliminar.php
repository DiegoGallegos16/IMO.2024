<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	header('Content-Type: text/html; charset=UTF-8');
	date_default_timezone_set('America/Santiago');

	//-------------------------------
	//

	include("funciones.php");

	//----------------------------------------------
	//
	$db='munioso_08dbintranet_municipal';
	$cnx=conexion($db);

	//-----------------------------------------------
	//

	$num_id=(isset($_GET['num_id']))?$_GET['num_id']:'';
	

	
	if(!empty($num_id)){
		$statement=$cnx->prepare('DELETE FROM ciudades WHERE num_id=:num_id');
		$statement->execute(array(':num_id' => $num_id ));
	}


?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <!--  boostrap -->
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<!-- font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Eliminar Ciudad</title>
  <style>
	body{
		font-family:arial
	}
  </style>
 </head>
 <body>
	<div class='container text-center'>
		<div class='row'>
			<div class='col'>
				<img src='https://t4.ftcdn.net/jpg/03/46/38/39/240_F_346383913_JQecl2DhpHy2YakDz1t3h0Tk3Ov8hikq.jpg'><br>
				Registro Eliminado<br>
				<a href='ciudades_listado.php'>Volver</a>
			</div>

		</div>
	</div>
	
 </body>
</html>
 


