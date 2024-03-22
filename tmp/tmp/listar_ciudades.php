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
	

		$sql="SELECT * from ciudades order by str_nombre desc";

		$statement=$cnx->prepare($sql);
		$statement->execute();
		$resultado=$statement->fetchAll();
		$middle='';
		foreach ($resultado as $rs ) {							
			$middle.= "
					<tr>
						<td> $rs[num_id] </td>
						<td> $rs[str_nombre] </td>	
								
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
			<div class='col'>
				<img src='https://www.imodigital.cl/source/img/300_mailLogoIMO_horizontal.png'>
				<br>
				<h5>Ciudades</h5>
			</div>
		</div>


		<div class='row'>
			<div class='col'>
				<!-- ------------------- -->
				<table class="table">
					<thead>
						<tr>
							<th scope="col">ID <i class="fas fa-walking"></i> </th>
							<th scope="col">Nombre <i class="fas fa-user-tie"></i></th>
							
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
