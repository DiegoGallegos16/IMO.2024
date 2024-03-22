<?php

		echo "<img src='https://es.copytrans.net/app/uploads/sites/4/2022/08/iphone-hackeado.png'>";

		die();

		echo "hhh";
	/*

	function periodo_solicita_hex($mes){
		
		$mes=intval($mes)+1;
		if($mes>=13){
			$mes=1;
			$year=date('Y')+1;
			
		}else{
			$year=date('Y');
		}	

		$dia= cal_days_in_month(CAL_GREGORIAN, intval($mes), intval($year)); 

		$mes=(strlen($mes)==1)?"0$mes":$mes;

		$fec_periodo_inicio="01-$mes-".$year;
		$fec_periodo_final="$dia-$mes-".$year;
		$salida=array('fec_periodo_inicio'=>$fec_periodo_inicio, 'fec_periodo_final'=>$fec_periodo_final);
		return($salida);
	}



	$mes=date('m');
	$mes=2;
	$a_resp=periodo_solicita_hex($mes);

	echo $a_resp['fec_periodo_inicio']. "<br>".  $a_resp['fec_periodo_final'];


	$f_periodo_inicio_mes=substr('2024-03-01',0,7);
	echo "<hr>$f_periodo_inicio_mes";

	$f_periodo_inicio_mes_actual=substr('2024-03-01',5,2);
	echo "<hr>$f_periodo_inicio_mes_actual";

	echo "<hr>";
	*/

/*

	$mes_hoy=12;//intval(date('m'));
	$f_periodo_inicio=intval(substr('2024-02-01',5,2));							 	
	$f_periodo_inicio_actual=$f_periodo_inicio-1;	

	 
	
	if($f_periodo_inicio_actual<=0){
		$f_periodo_inicio_actual=12;
	}
	
	
	echo "
		mes_hoy=$mes_hoy <br>
		f_periodo_inicio_actual=$f_periodo_inicio_actual<br>
		f_periodo_inicio=$f_periodo_inicio<br>
		


	
	";
	
	if($mes_hoy!=$f_periodo_inicio && $mes_hoy!=$f_periodo_inicio_actual){
		echo "<br><br>El periodo a solicitar solo puede ser el mes actual y/o el mes siguiente";
	}else{
		echo "<hr>correcto";
	}
	
*/
?>	