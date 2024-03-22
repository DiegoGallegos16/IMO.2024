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
	

		$sql="SELECT * from funcionarios order by str_nombres desc";
		//echo $sql;

		$statement=$cnx->prepare($sql);
		$statement->execute();
		$resultado=$statement->fetchAll();
		$middle='';
		foreach ($resultado as $rs ) {					

			$delete="<a href='funcionarios_eliminar.php?rut_id=$rs[rut_id]'><i class='fas fa-trash-alt'></i></a>";

			$edit="<a href='funcionarios_editar.php?rut_id=$rs[rut_id]'><i class='far fa-edit'></i></a>";

				
			$middle.= "
					<tr>
						<td>$delete   $edit </td>
						<td> $rs[rut_id] h</td>
						<td> $rs[str_nombres]</td>
						<td> $rs[str_apellidos]</td>
						<td> $rs[str_nombrecorto]</td>
						<td> $rs[cod_ciudad]</td>
						<td> $rs[cod_pais]</td>
					</tr>
					 ";
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
			<div class='col' >
				<img src='https://www.imodigital.cl/source/img/300_mailLogoIMO_horizontal.png'>
				<br>
				<a href="index.php">Menu Principal</a>
				<br>

				<br><br>
				
				<h5>Funcionarios</h5>
				<div> <a href='funcionarios_agregar.php'><i class="fas fa-plus"></i> Agregar Funcionario </a></div>
				
			</div>
		</div>


		<div class='row'>
			<div class='col'>
				<!-- ------------------- -->
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
						<tr>
							<th scope="col" width="90px">- </th>
							<th scope="col">RUT <i class="fas fa-walking"></i> </th>
							<th scope="col">Nombre <i class="fas fa-user-tie"></i></th>
							<th scope="col">Apellidos <i class="fas fa-user-tie"></i></th>
							<th scope="col">Nombre Corto <i class="fas fa-user-tie"></i></th>
							<th scope="col">Ciudad <i class="fas fa-walking"></i> </th>
							<th scope="col">Pais <i class="fas fa-walking"></i> </th>
							
						</tr>
					</thead>
					<tbody>

						<?php echo $middle ?>
					</tbody>
				</table>
				<!-- ------------------- -->



			</div>
		</div>
	</div>
  
 </body>
</html>
