<?php

/**
 * Recibe un array, de un maximo de 2 dimesiones y lo muestra por pantalla
 *
 * @param array array de entrada
 * @return true
 */

function muestraArray($array)
{
	foreach($array as $key=> $value)
	{
		echo $key.": ";
		if(is_array($value))
		{
			//foreach($value as $value2)
			//	echo $value2.",";
			echo implode(',', $value);
		}
		else
		{
			echo $value;
			echo "<br/>";
		}
	}
	return TRUE;
}
?>