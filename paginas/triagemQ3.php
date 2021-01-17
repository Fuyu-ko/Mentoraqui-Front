<!DOCTYPE html>
<html>
<head>
<?php require "../menu/css&js.php";?>
	<title></title>
</head>
<body>
<?php require "../menu/navbar.php";?>

	<div class="container-fluid">
		<h1>TRIAGEM</h1>
	</div>
	<div class="container-fluid">
		<table class="table triagem">
			<tr>
				<td class="active respondido triagemtd">Fase 1</td>
				<td class="active respondido triagemtd">Fase 2</td>
				<td class="active triagemtd">Fase 3</td>
				<td>Fase 4</td>
			</tr>
		</table>
	</div>
	<div class="container-fluid">
		<h4>Vamos te ajudar! Selecione, entre as opções abaixo, <br>
		as áreas que mais fazem falta na sua vida.</h4>
	</div>
	<div class="container-fluid">
		<table class="tTriagem">
			<tr>
				<td><button class="btn">Carreira</button></td>
			</tr>
			<tr>
				<td><button class="btn">Comportamento</button></td>
			</tr>
			<tr>
				<td><button class="btn">Conhecimento/Educação(Ensino)</button></td>
			</tr>
			<tr>
				<td><button class="btn">Cultura e Conexão</button></td>
			</tr>
		</table>
		<div class="form-group">
			<a class="btn btn-default btnTriagem" href="triagemQ4.php" role="button">Próximo</a>
		</div>
	</div>

<?php require "../menu/footer.php";?>
</body>
</html>