<!DOCTYPE html>
<html>
<head>
<?php require "../menu/css&js.php";?>
	<title></title>
</head>
<body>
<?php require "../menu/navbar.php";?>

	<div class="container-fluid">
		<h1>CADASTRAR</h1>
	</div>
	<div class="container">
		<form>
			<div class="form-group">
				<input type="text" class="form-control" name="" placeholder="Nome">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="" placeholder="E-mail">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="" placeholder="Celular">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="" placeholder="Senha">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="" placeholder="Confirmar senha">
			</div>
			<div class="form-group">
			  	<select class="form-control" id="">
			    	<option disabled selected hidden>Selecione uma opção</option>
			    	<option>Jovem Talento</option>
			    	<option>Mentoria</option>
			  	</select>
			</div>
			<div class="form-group">
				<a class="btn btn-default" href="#" role="button">Confirmar</a>
			</div>
		</form>
	</div>

<?php require "../menu/footer.php";?>
</body>
</html>