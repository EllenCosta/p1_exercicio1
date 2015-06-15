<?php
session_start();
if(!isset($_SESSION["usuario"])){
	header("location: index.php");
}

$array = unserialize($_COOKIE["pessoa"]);
#var_dump($array);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>lista</title>
	<style>
		#conteiner{

			position:absolute;
			left: 10%;
			top: 20%;
			width: 80%;
		}
	</style>
</head>
<body>

 	<div id="cabecalho">
 		<?php include "cabecalho.php"; ?>
 	</div>

	<div id="conteiner">


		<table border=1 width=40% cellspacing=0 width="100%">
		
			<tr align="center">
				<td><b>Cod</b></td>
				<td><b>Nome</b></td>
				<td><b>Email</b></td>
			</tr>

			<?php for ($i=0; $i < count($array) ; $i++) { ?>	
				<tr> 
					<td align="center"><?php echo $array[$i]["cod"] ?></td>
					<td align="center"><?php echo $array[$i]["nome"] ?></td>
					<td align="center"><?php echo $array[$i]["email"] ?></td>
				</tr>
			<?php } ?>
		</table>
		<br>
		<a href="cadastro.php">Cadastrar novo cliente.</a><br>
		<a href="sair.php">Sair</a>

	</div>
	<div id="footer">
		<?php include "rodape.php"; ?>
	</div>
	
</body>
</html>