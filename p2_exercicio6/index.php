<?php
#Você repetirá os 3 primeiros exercícios mantendo o padrão “p2_exercicio4” e assim por diante, 
#mas deste vez fazendo uma função para realizar a principal tarefas dos exercícios.

$dados = array(
	array("nome" => "Miguel", "matricula"=>"20130806001", "altura"=> 164),
	array("nome" => "Sophia", "matricula"=>"20130806002", "altura"=> 184),
	array("nome" => "Davi", "matricula"=>"20130806003", "altura"=> 160),
	array("nome" => "Arthur", "matricula"=>"20130806004", "altura"=> 170),
	array("nome" => "Julia", "matricula"=>"20130806005", "altura"=> 170),
	array("nome" => "Pedro", "matricula"=>"20130806006", "altura"=> 179),
	array("nome" => "Isabella", "matricula"=>"20130806007", "altura"=> 190),
	array("nome" => "Gabriel", "matricula"=>"20130806008", "altura"=> 180),
	array("nome" => "Manuela", "matricula"=>"20130806009", "altura"=> 160),
	array("nome" => "Bernardo", "matricula"=>"20130806010", "altura"=> 175),
	array("nome" => "Maria Eduarda", "matricula"=>"20130806011", "altura"=> 190),
	array("nome" => "Heitor", "matricula"=>"20130806012", "altura"=> 167),
	array("nome" => "Giovanna", "matricula"=>"20130806013", "altura"=> 189),
	array("nome" => "Rafael", "matricula"=>"20130806014", "altura"=> 194),
	array("nome" => "Laura", "matricula"=>"20130806015", "altura"=> 169),
	array("nome" => "Lucas", "matricula"=>"20130806016", "altura"=> 172),
	array("nome" => "Luiza", "matricula"=>"20130806017", "altura"=> 187),
	array("nome" => "Alice", "matricula"=>"20130806018", "altura"=> 180),
	array("nome" => "Valentina", "matricula"=>"20130806019", "altura"=> 162),
	array("nome" => "Matheus", "matricula"=>"20130806020", "altura"=> 170)
	);

	
	function cmp($a, $b)
	{
	    return strcmp($a["altura"], $b["altura"]);
	} 

    
    usort($dados, "cmp");

     /*for ($i=0; $i < 20; $i++) { 
     	echo "Nome: ".$dados[$i]["nome"]."<br>";
     	echo "Matricula: ".$dados[$i]["matricula"]."<br>";
     	echo "altura: ".$dados[$i]["altura"]."<br><br>";
     }*/

?>
<table border=1 width=40% cellspacing=0>
	<tr>
		<td colspan="3" align="center"><h3>Alunos mais altos.</h3></td>
	</tr>
	<tr align="center">
		<td><b>Matricula</b></td>
		<td><b>altura</b></td>
	</tr>
	<?php for ($i=15; $i < count($dados) ; $i++) { ?>
		
		<tr>
			<td align="center"><?php echo $dados[$i]["matricula"] ?></td>
			<td align="center"><?php echo $dados[$i]["altura"] ?></td>
		</tr>
	<?php  }?>
</table>