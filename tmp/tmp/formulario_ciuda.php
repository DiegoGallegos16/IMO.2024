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

		
	$str_nombre=(isset($_POST['str_nombre']))?$_POST['str_nombre']:'';
	if(!empty($str_nombre)){

		$statement=$cnx->prepare('INSERT ciudades SET str_nombre=:str_nombre');

		$statement->execute(array(':str_nombre' => $str_nombre));	

		echo " registro agregado";
	}
		
		

	//-----------------------------------------------
	//

	

	
?>

<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <!--  boostrap -->
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<!-- font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Agregar Ciudades</title>
  <style>
	body{
		font-family:arial
	}
  </style>
 </head>
 <body>
	
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name='formulario'  method='post' accept-charset='utf-8'>	
		<div class='container' style="border:1px solid silver">
			<div class='row'>
				<div class='col'>
					<img src='https://www.imodigital.cl/source/img/300_mailLogoIMO_horizontal.png'>
				</div>
			</div>


			<div class='row'>
				<div class='col-2'>
					<i class="fas fa-walking"></i> Num ID 
				</div>
				<div class='col-2'>
					

				</div>
			</div>

			<div class='row'>
				<div class='col-2'>
					<i class="fas fa-user-tie"></i> nombre 
				</div>
				<div class='col-2'>
					<input type='text' name='str_nombre' id='str_nombre'  class='form-control'  maxlength='255' title='' alt=''  >
				</div>
			</div>



			<div class='row mb-2'>
				<div class='col text-left'>
					<button type="button" class="btn btn-primary" onclick='agregar()'><i class="far fa-save"></i> Agregar </button>	
				</div>				
			</div>



		</div>

	</form>


	<script>
		function agregar(){

			formulario.submit();
		
		}
	</script>
  
 </body>
</html>
