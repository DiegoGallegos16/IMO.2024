<?php
	include("funciones.php");


	$resp='';

	// Establecer conexión a la base de datos
	$db = 'munioso_08dbintranet_municipal';
	$cnx = conexion($db);

	// Obtener los datos del formulario
	$id_rut = isset($_POST['id_rut']) ? $_POST['id_rut'] : '';
	$str_password = isset($_POST['str_password']) ? $_POST['str_password'] : '';

	

	if(!empty($id_rut)){
		
		$statement=$cnx->prepare('SELECT * FROM mant_usuarios_sistema WHERE id_rut=:id_rut ');
		$statement->execute(array(':id_rut'=> $id_rut ));
		$rs=$statement->fetch();					
		
		//$num_id=$rs['num_id'];
		$str_nombres=$rs['str_nombres'];	
		$str_apellidos=$rs['str_apellidos'];	
		$str_nombre_corto=$rs['str_nombre_corto'];	
		$str_password_db=$rs['str_password'];	

		if($str_password_db==$str_password){
			header('location:menu.php');
		}else{
			$resp="
				<div class='text-center' style='background:white'>
					<img src='https://www.imodigital.cl/source/img/203_icono_mensaje.png'><br>
					La contraseña ingresada es incorrecta				
				</div>";
		}
		
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!--  boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(#141e30, #243b55);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 300px;
            padding: 40px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
            box-sizing: border-box;
            color: #fff;
        }

        .login-box h2 {
            margin-bottom: 30px;
            text-align: center;
        }

        .login-box .user-box {
            position: relative;
            margin-bottom: 30px;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
        }

        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: 0.5s;
        }

        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
        }
		
        .login-box button {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            background: #03e9f4;
            border: none;
            outline: none;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
        }

        .login-box button:hover {
            background: #1dc7ea;
        }
		
    </style>
</head>
<body>
	
				<?php echo $resp ?>
	


	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name='formulario'  method='post' accept-charset='utf-8'>	
		<div class="login-box">
			<h2>Iniciar Sesión</h2>
			<form action="login.php" method="POST">
			<div class="user-box">
				<input type="text" name="id_rut" required>
				<label>RUT</label>
			</div>
			<div class="user-box">
				<input type="password" name="str_password" required>
				<label>Contraseña</label>
			</div>
			<button type='button' class='btn btn-link' onclick='enviar()'> Iniciar Sesión<i class="far fa-file-pdf ml-2"></i></button>  

		</div>
	</form>
</body>

	<script>
		function enviar(){
			
			formulario.submit();
		}
	</script>
</html>
