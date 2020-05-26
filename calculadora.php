<?php 
	function calculadora ($x, $y, $operacion){

		if ($operacion == "suma")
			return $x + $y;
		else if ($operacion == "resta")
			
			return $x - $y;
		else if ($operacion == "multiplicacion")
			
			return $x * $y;
		else if ($operacion == "division")
			
			return $x / $y;
		else
			return 0;

	}
?>