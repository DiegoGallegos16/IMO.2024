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

	$rut_id=(isset($_POST['rut_id']))?$_POST['rut_id']:'';	
	$str_nombres=(isset($_POST['str_nombres']))?$_POST['str_nombres']:'';
	$str_apellidos = (isset($_POST['str_apellidos'])) ? $_POST['str_apellidos'] : ''; // Agregamos el apellido
	$str_nombrecorto = (isset($_POST['str_nombrecorto'])) ? $_POST['str_nombrecorto'] : ''; // Agregamos el nombre corto
	$cod_ciudad = (isset($_POST['cod_ciudad'])) ? $_POST['cod_ciudad'] : ''; // Agregamos el código de ciudad
	$cod_pais = (isset($_POST['cod_pais'])) ? $_POST['cod_pais'] : ''; // Agregamos el código de país

/*
	echo "
		rut:$rut_id <br>
		nombre: $str_nombre <br>
		apellido: $str_apellidos <br>
		nombre corto:$str_nombrecorto <br>
		ciudad: $cod_ciudad <br>
		pais: $cod_pais
	
	";
*/

	if(!empty($rut_id)){

		$statement=$cnx->prepare('INSERT funcionarios SET 
		rut_id=:rut_id,
		str_nombres=:str_nombres,
		str_apellidos=:str_apellidos,
		str_nombrecorto=:str_nombrecorto,
		cod_ciudad=:cod_ciudad,
		cod_pais=:cod_pais
		
		');

		$statement->execute(array(
			':rut_id'=>$rut_id,
			':str_nombres'=>$str_nombres,
			':str_apellidos'=>$str_apellidos,
			':str_nombrecorto'=>$str_nombrecorto,
			':cod_ciudad'=>$cod_ciudad,
			':cod_pais'=>$cod_pais
			));


	/*
		$statement=$cnx->prepare('INSERT funcionarios SET 
		rut_id=:rut_id,
		str_nombres=:str_nombres,
		str_apellidos=:str_apellidos,
		str_nombrecorto=:str_nombrecorto,
		cod_ciudad=:cod_ciudad,
		cod_pais=:cod_pais,
		');

		$statement->execute(array(
			':rut_id'=>$rut_id,
			':str_nombres'=>$str_nombres,
			':str_apellidos'=>$str_apellidos,
			':str_nombrecorto'=>$str_nombrecorto,
			':cod_ciudad'=>$cod_ciudad,
			':cod_pais'=> $cod_pais));	

			*/

		header('Location: funcionarios_listado.php');
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

  <title>Agregar Funcionarios</title>
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
					<i class="fas fa-walking"></i> Rut ID 
				</div>
				<div class='col-2'>
				<input type='text' name='rut_id' id='rut_id'  class='form-control'  maxlength='255' title='' alt=''  >
				</div>
			</div>


				</div>
			</div>

			<div class='row'>
				<div class='col-2'>
					<i class="fas fa-user-tie"></i> Nombre 
				</div>
				<div class='col-2'>
					<input type='text' name='str_nombres' id='str_nombres'  class='form-control'  maxlength='255' title='' alt=''  >
				</div>
			</div>

			<div class='row'>
				<div class='col-2'>
					<i class="fas fa-user-tie"></i> Apellidos 
				</div>
				<div class='col-2'>
					<input type='text' name='str_apellidos' id='str_apellidos'  class='form-control'  maxlength='255' title='' alt=''  >
				</div>
			</div>

			<div class='row'>
				<div class='col-2'>
					<i class="fas fa-user-tie"></i> Nombre Corto 
				</div>
				<div class='col-2'>
					<input type='text' name='str_nombrecorto' id='str_nombrecorto'  class='form-control'  maxlength='255' title='' alt=''  >
				</div>
			</div>

			<div class='row'>
				<div class='col-2'>
					<i class="fas fa-user-tie"></i> Codigo Ciudad 
				</div>
				<div class='col-2'>
					<input type='text' name='cod_ciudad' id='cod_ciudad'  class='form-control'  maxlength='255' title='' alt=''  >
				</div>
			</div>

				<div class='row'>
				<div class='col-2'>
					<i class="fas fa-user-tie"></i> Codigo Pais 
				</div>
				<div class='col-2'>
					<input type='text' name='cod_pais' id='cod_pais'  class='form-control'  maxlength='255' title='' alt=''  >
				</div>
			</div>





			<div class='row mb-2 mt-2'>
				<div class='col text-left'>
					<button type="button" class="btn btn-primary" onclick='agregar()'><i class="far fa-save"></i> Agregar </button>	

					

					<a href="funcionarios_listado.php" class="btn btn-secondary ml-2" ><i class="fas fa-long-arrow-alt-left"></i> Volver </a>

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
