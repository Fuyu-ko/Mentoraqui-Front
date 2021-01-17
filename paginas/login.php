<!DOCTYPE html>
<html>
<head>
<?php require "../menu/css&js.php";?>
	<title></title>
</head>
<body>
<?php require "../menu/navbar.php";?>

	<div>
		<img class="icoLogin" src="../imagens/iconeAzul.png">
	</div>
	<div class="container-fluid">
		<h1>ACESSAR</h1>
	</div>
	<div class="container">
		<form name="login">
			<div class="form-group" action="usuario.php">
				<input type="email" class="form-control" name="" placeholder="E-mail">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="" placeholder="Senha">
			</div>
			<div class="form-group">
				<a class="btn btn-default" href="usuario.php?user=X" role="button">Confirmar</a>
				<a class="btn btn-default" href="cadastro.php" role="button">Cadastrar</a>
			</div>
		</form>
	</div>

<?php require "../menu/footer.php";?>
</body>
</html>