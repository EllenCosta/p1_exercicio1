<?php 
#Você repetirá os 3 primeiros exercícios mantendo o padrão “p2_exercicio4” e assim por diante, 
#mas deste vez fazendo uma função para realizar a principal tarefas dos exercícios.

$numeros = array();

for($i=0; $i<10; $i++){
	$numeros[$i]=rand ( 0 , 100 );
}

for ($i=0; $i < count($numeros); $i++) { 

	parouimpar($numeros[$i]);
}

function parouimpar($numero){
	$x= $numero % 2;
	$x == 0?print $numero." é par <br>":print $numero." é impar <br>";
}

?>