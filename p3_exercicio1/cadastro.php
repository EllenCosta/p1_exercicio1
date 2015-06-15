<?php 
session_start();
if(!isset($_SESSION["usuario"])){
	header("location: index.php");
}

	if (isset($_REQUEST["cadastrar"])) {

		if(isset($_COOKIE["pessoa"])){
			$array = unserialize($_COOKIE["pessoa"]);
			array_push($array, array("cod" => $_POST["cod"], "nome" => $_POST["nomepessoa"], "email" => $_POST["emailpessoa"]));
			$value = serialize($array);
			setcookie("pessoa", $value);
		}else{
			$array = array(array("cod" => $_POST["cod"], "nome" => $_POST["nomepessoa"], "email" => $_POST["emailpessoa"]));
			$value = serialize($array);
			setcookie("pessoa", $value);
		}




		#setcookie("cod[".$_POST["cod"]."]",$_POST["cod"]);
		#setcookie("nome[".$_POST["nomepessoa"]."]",$_POST["nomepessoa"]);
		#setcookie("email[".$_POST["emailpessoa"]."]",$_POST["emailpessoa"]);

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
			<label for="nomepessoa">Nome: <input type="text" name="nomepessoa"></label>
	 		<label for="emailpessoa">Email: <input type="text" name="emailpessoa"></label>
	 		<input type="submit" name="cadastrar" value="cadastrar">
			
		</form>
 	</div >
	 
	<div id="footer">
		<?php include "rodape.php"; ?>
	</div>
 </body>
 </html>