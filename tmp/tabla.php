<?php




$middle="
	<tr>
		<td >RUT</TD>
		<td>NOMBRE</TD>
		<td class='text-center'>d.p</TD>
		<td class='text-center'>d.c</TD>
		<td class='text-center'>n.p</TD>
		<td class='text-center'>n.c</TD>
		<td class='text-center'>total d</TD>
		<td class='text-center'>total n</TD>
		<td >Obssssss</TD>
	</tr>

";

$tabla="
	<table class='table  table-bordered table-sm' style='font-size:11px; font-family:verdana' border='1' CELLPADDING='2' CELLSPACING='0'>
					<thead>
						<tr class='text-center table-secondary'>
							<th scope='col' rowspan='2' style='vertical-align:middle'>RUT</th>
							<th scope='col' rowspan='2' style='vertical-align:middle'>NOMBRE</th>
							<th scope='col' colspan='2'>DIURNA</th>
							<th scope='col' colspan='2'>NOCTURNA</th>							
							<th scope='col' >TOTAL DIURNA<BR></th>
							<th scope='col' >TOTAL NOCTURNA<BR></th>
							<th scope='col' rowspan='2' style='vertical-align:middle'>OBS.</th>
						</tr>

						<tr class='text-center table-secondary' style='font-weight:bold'>
							<td>PAGADAS</td>
							<td>COMPENSADAS</td>
							<td>PAGADAS</td>
							<td>COMPENSADAS</td>
							<td>P.C.</td>
							<td>P.C.</td>
							
						</tr>
					</thead>
					<tbody>
						$middle
						<tr>
							<td colspan='9	'>
								<small><b>P.C.</b>= Pagadas, Compensadas</small>
							</td>
						</tr>
					</tbody>
				</table>
";


$mes = date("m", strtotime({fec_periodo_inicio}));// extrae el mes		
?>


<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!--  boostrap -->

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

		<!-- font-awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<title>Resumen Solicitud</title>
		<style>
			body{
				font-family:verdana;
				font-size:12px
			}
		</style>
	</head>
 	<body>
		<div class='container mt-5'>
			
			<div class='row'>
				<div class='col '>
					<?php echo $tabla ?>
				</div>
			</div>
			
			
			
			
			<div class='row'>
				<div class='col text-center'>
					<button type='button' class='btn btn-primary btn-sm' onclick='CloseModal()'> <i class="far fa-times-circle"></i> Salir </button>			
				</div>
			</div>
			
		</div>
		
	</body>
</html>



<script>
	function CloseModal()
        {
            window.parent.tb_remove();
        }
</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">