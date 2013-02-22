<?php
include 'functions.php';

$alumno = array(
		'nombre' => 'Ruben',
		'apellidos' => 'de la Fuente',
		'email' => 'ruben_dl_fuent@hotmail.com',
		'edad' => 20,
		'algo',
		'estudiante' => TRUE,
		FALSE => 'cosa',
		'algo mas',
		1.7 => 'y este',
		6 => 'mas aun',
		123,
		array('rojo', 'verde', 'naranja')
);



echo "<pre>";
print_r($alumno);
echo "</pre>";

foreach($alumno as $key=> $value)
{
	echo $key.": ".$value;
	echo "<br/>";
}


echo "<hr/>";
 
muestraArray($alumno);

echo date("\H\o\y\, \S\e\m\a\n\a\ W, Y");



