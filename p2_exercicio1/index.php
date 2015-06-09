<?php 
#Crie uma pasta “p2_exercicio1” e um arquivo index.php.
#Dentro dele crie um array com números variados de 1 a 100, o programa deverá mostrar se o número é ímpar ou par.

$numeros = array();

for($i=0; $i<10; $i++){
	$numeros[$i]=rand ( 0 , 100 );
}

for ($i=0; $i < count($numeros); $i++) { 

	$x= $numeros[$i] % 2;
	$x == 0?print $numeros[$i]." é par <br>":print $numeros[$i]." é impar <br>";
}

?>