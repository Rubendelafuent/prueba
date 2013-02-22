<?php

$max = 22;

$a = 0;
$b = 1;
$c = 0;

echo "F = ";

while(($a+$b) <= $max){
	
	echo $c.", ";
	$a = $b;
	$b = $c;
	$c = $a + $b;
}
