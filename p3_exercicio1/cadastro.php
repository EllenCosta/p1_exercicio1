<?php 
session_start();
if(!isset($_SESSION["usuario"])){
	header("location: index.php");
}

	if (isset($_REQUEST["cadastrar"])) {

		setcookie("cod",$_REQUEST["cod"]);
		setcookie("cliente",$_REQUEST["nomecliente"]);
		setcookie("email",$_REQUEST["emailcliente"]);

		header("Location: lista.php");

	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>cadastro usuário</title>
		<style>
		#conteudo{ 
			
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

 	<div id="conteudo">
		<form method="post">
			
			<label for="cod">Cod: <input type="text" name="cod"></label>
			<label for="nomecliente">Nome: <input type="text" name="nomecliente"></label>
	 		<label for="emailcliente">Email: <input type="text" name="emailcliente"></label>
	 		<input type="submit" name="cadastrar" value="cadastrar">
			
		</form>
 	</div >
	 
	<div id="footer">
		<?php include "rodape.php"; ?>
	</div>
 </body>
 </html>