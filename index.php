<?php
	echo "Calculadora ";
	echo "Hola :)";
	function sumar($a, $b)
	{
		return $a+$b;
	}
	function resta($a, $b)
	{
		return $a-$b;
	}
	function multiplicacion ($a, $b)
	{
		return $a*$b;
	}
	function divicion($a,$b)
	{
		if($b==0)
		{
			return "error";
		}
		return $a/$b;
	}
	function potencia($a,$b)
	{
		return pow($a,$b);
	}
?>