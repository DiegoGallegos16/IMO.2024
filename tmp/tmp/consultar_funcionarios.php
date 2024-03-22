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

		$str_nombre="";
		$str_correo="";
		$str_ciudad="";

	//-----------------------------------------------
	//

	$rut_id=(isset($_GET['rut_id']))?$_GET['rut_id']:'';	
	
	if(!empty($rut_id)){

		$statement=$cnx->prepare('SELECT * FROM funcionarios WHERE rut_id=:rut_id ');
		$statement->execute(array(':rut_id'=> $rut_id ));
		$rs=$statement->fetch();				
		$ban=($rs)?1:0;
		
		//------------------------------
		//
		if($ban){
			$rut_id=$rs['rut_id'];
			$str_nombres=$rs['str_nombres'];
			$str_apellidos=$rs['str_apellidos'];
			$str_nombrecorto=$rs['str_nombrecorto'];
			$cod_ciudad=$rs['cod_ciudad'];
			$cod_pais=$rs['cod_pais'];
			
		}else{
			echo "<center>
				<img src='https://www.imodigital.cl/source/img/203_icono_mensaje.png'><br>
				No existe el $rut_id en la base de datos
				</center>
			";
		}

	}else{
		
		echo " no se recibieron datos";
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

  <title>Listar por registro</title>
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
			</div>
		</div>


		<div class='row'>
			<div class='col-2'>
				<i class="fas fa-walking"></i> RUT ID 
			</div>
			<div class='col-2'>
				<?php echo  $rut_id ?>
			</div>
		</div>

		<div class='row'>
			<div class='col-2'>
				<i class="fas fa-user-tie"></i> nombre 
			</div>
			<div class='col-2'>
				<?php echo  $str_nombres ?>
			</div>
		</div>

		<div class='row'>
			<div class='col-2'>
				<i class="fas fa-envelope-square"></i> Apellidos 
			</div>
			<div class='col-2'>
				<?php echo  $str_apellidos ?>
			</div>
		</div>

			<div class='row'>
			<div class='col-2'>
				<i class="fas fa-user-tie"></i> Nombre Corto
			</div>
			<div class='col-2'>
				<?php echo  $str_nombrecorto ?>
			</div>
		</div>


			<div class='row'>
			<div class='col-2'>
				<i class="fas fa-walking"></i> Codigo Ciudad 
			</div>
			<div class='col-2'>
				<?php echo  $cod_ciudad ?>
			</div>
		</div>

		<div class='row'>
			<div class='col-2'>
				<i class="fas fa-walking"></i> Codigo Pais 
			</div>
			<div class='col-2'>
				<?php echo  $cod_pais ?>
			</div>
		</div>






	</div>
  
 </body>
</html>
