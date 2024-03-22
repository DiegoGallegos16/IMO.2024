<?php
	
//--------------------------------
// Variables Generales
	
	date_default_timezone_set("America/Santiago");
//---------------------------------
// Conexion a la base de datos
	function conexion($db){
		try{		
			$user="munioso_imun"; // Sesion MySQL
			$pass="dQDU60keJdmL*-"; // DataBase MySQL
				
			$cnx=new PDO("mysql:host=192.168.200.14;dbname=$db;charset=utf8", $user, $pass);
		}catch(PDOException $e){
			//echo "hh";
			echo "Error ". $e->getMessage();
			die();
		}
		/*
			DB 		: munioso_solicitudes
			user 	: munioso_intranetrw
			pass 	: kMmBnDMPDzJG

		 */	
		

		return($cnx);
	}


//-----------------------------
//

	function validar_rut(){

	}
?>