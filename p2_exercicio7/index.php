<?php
#Crie uma pasta “p2_exercicio7” e um arquivo index.php. Dentro dele crie um programa para mostrar a 
#sequência fibonacci até o 100º elemento, para isso, 
#crie uma função fibonacci que deverá receber o índice do elemento e a função irá calcular o número correspondente daquele índice.


function fibonacci($q){
	if($q >= 2){ 
		$f = [1,1]; 
		for($i = 2; $i < $q; $i++){
			$f[$i] = $f[$i-1] + $f[$i-2];		
		}
		return $f;
	}
	return ($q == 1) ? [1] : [];
}
 

$fib = fibonacci(100);
echo "<h3>Sequência Fibonacci</h3>";
foreach($fib as $v){
	echo "<br>".$v;	
}
?>