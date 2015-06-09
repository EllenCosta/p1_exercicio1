<?php
#Você repetirá os 3 primeiros exercícios mantendo o padrão “p2_exercicio4” e assim por diante, 
#mas deste vez fazendo uma função para realizar a principal tarefas dos exercícios.

$dados = array(
	array("nome" => "Miguel", "nota"=>8),
	array("nome" => "Sophia", "nota"=>7),
	array("nome" => "Davi", "nota"=>4.5),
	array("nome" => "Arthur", "nota"=>9),
	array("nome" => "Julia", "nota"=>6),
	array("nome" => "Pedro", "nota"=>5),
	array("nome" => "Isabella", "nota"=>10),
	array("nome" => "Gabriel", "nota"=>8),
	array("nome" => "Manuela", "nota"=>7),
	array("nome" => "Bernardo", "nota"=>8),
	array("nome" => "Maria Eduarda", "nota"=>7),
	array("nome" => "Heitor", "nota"=>6),
	array("nome" => "Giovanna", "nota"=>5),
	array("nome" => "Rafael", "nota"=>9),
	array("nome" => "Laura", "nota"=>9),
	array("nome" => "Lucas", "nota"=>6),
	array("nome" => "Luiza", "nota"=>8),
	array("nome" => "Alice", "nota"=>10),
	array("nome" => "Valentina", "nota"=>9),
	array("nome" => "Matheus", "nota"=>7)
	);

function situacao($nota){
	$nota < 7 ? $status ="reprovado": $status ="aprovado";
	return $status;
}

?>
<table border=1 width=40% cellspacing=0>
	<tr align="center">
		<td><b>Nome</b></td>
		<td><b>Nota</b></td>
		<td><b>Situação</b></td>
	</tr>
	<?php for ($i=0; $i < count($dados) ; $i++) { ?>
		
		<tr>
			<td><?php echo $dados[$i]["nome"] ?></td>
			<td align="center"><?php $dados[$i]["nota"] < 7?print "<font color=\"#FF0000\">".$dados[$i]["nota"]."</font>":print "<font color=\"#4682B4\">".$dados[$i]["nota"]."</font>" ?></td>
			<td align="center"><?php echo situacao($dados[$i]["nota"]); ?></td>
		</tr>
	<?php } ?>
</table>