<?php 
session_start();

$usuario = array(
	array("login"=>"maria","senha"=>"12345"),
	array("login"=>"jose","senha"=>"54321"),
	array("login"=>"ana","senha"=>2323)
	);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<style>
		fieldset{ 
			
			width: 400px;
			height: 120px;
			position: absolute; 
			left: 30%; /* posiciona a 90px para a esquerda */ 
			top: 30%; /* posiciona a 70px para baixo */

		}

		label{
			padding-top: 10px;
			margin-left:50px;
 
		    float:left;
		    position:relative;
		}
		.btn{
			
			margin-top: 15px;
			margin-left:120px;
			position:relative;
			padding: 4px 11px;

			border: 1px solid;
			-moz-border-radius: 8px;
			-webkit-border-radius: 8px;
			border-radius: 6px;
		}

	</style>
</head>
<body>
	<div id="cabecalho">
		<?php include "cabecalho.php"; ?>
	</div>
	
	<div id="conteudo">
		<?php if(!isset($_REQUEST["logar"])){?>
		<form  method="post">
			<fieldset>
				<legend>LOGIN</legend>
				<label for="email" >Login: <input type="text" name="login" size="30"></label>
				<label for="senha">Senha: <input type="password" name="senha" size="30"></label>
				<input type="submit" value="logar" class="btn" name="logar">
			</fieldset>
		</form>
		<?php
		 }else{
		 	for ($i=0; $i < count($usuario) ; $i++) { 

		 		if($usuario[$i]["login"] == $_POST["login"] and $usuario[$i]["senha"] == $_POST["senha"]){
		 			$_SESSION["usuario"]=$_POST["login"];
		 			header("location: lista.php");
		 			exit;
		 		}else{
		 			header("location: index.php");
		 		}
		 		
		 	}
		 }
			
		?>

	</div>
	
	<div id="footer">
		<?php include "rodape.php"; ?>
	</div>
</body>
</html>