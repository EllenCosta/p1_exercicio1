<?php
$cod="";
$cliente="";
$email="";

if(isset($_COOKIE["cod"])){$cod=$_COOKIE["cod"];}
if(isset($_COOKIE["cliente"])){$cliente=$_COOKIE["cliente"];}
if(isset($_COOKIE["email"])){$email=$_COOKIE["email"];}

?>
<?php 
session_start();
if(!isset($_SESSION["usuario"])){
	header("location: index.php");
}
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
			
		<tr>
			<td align="center"><?php echo $cod; ?></td>
			<td align="center"><?php echo $cliente; ?></td>
			<td align="center"><?php echo $email; ?></td>
		</tr>
		
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
