<?php

$filas=4;
$columnas=5;
echo "<table border=1>";
	for($a=0; $a<$filas; $a++){
		echo "<tr>";
		for($i=0; $i<$columnas; $i++){
			if($a==0 && $i==0)
				echo "<td></td>";
			elseif($a==0)
				echo "<td>".$i."</td>";
			elseif($i==0)
				echo "<td>".$a."</td>";
			else 
				echo "<td>".$a*$i."</td>";
		}
		
		echo "</tr>";
	}

echo "</table>";
?>

