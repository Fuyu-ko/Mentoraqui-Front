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
				<td class="active triagemtd">Fase 1</td>
				<td class="triagemtd">Fase 2</td>
				<td class="triagemtd">Fase 3</td>
				<td>Fase 4</td>
			</tr>
		</table>
	</div>
	<div class="container-fluid">
		<h4>Qual seu nível de escolaridade?</h4>
	</div>
	<div class="container-fluid">
		<table class="tTriagem">
			<tr>
				<td><button class="btn">Ensino Fundamental Completo</button></td>
				<td><button class="btn">Cursando o Ensino Fundamental</button></td>
				<td><button class="btn">Ensino Fundamental Incompleto</button></td>
			</tr>
			<tr>
				<td><button class="btn">Ensino Médio Completo</button></td>
				<td><button class="btn">Cursando o Ensino Médio</button></td>
				<td><button class="btn">Ensino Médio Incompleto</button></td>
			</tr>
			<tr>
				<td><button class="btn">Ensino Superior Completo</button></td>
				<td><button class="btn">Cursando o Ensino Superior</button></td>
				<td><button class="btn">Ensino Superior Incompleto</button></td>
			</tr>
			<tr>
				<td><button class="btn">Técnico Completo</button></td>
				<td><button class="btn">Cursando o Técnico</button></td>
				<td><button class="btn">Técnico Incompleto</button></td>
			</tr>
		</table>
		<div class="form-group">
			<a class="btn btn-default btnTriagem" href="triagemQ2.php" role="button">Próximo</a>
		</div>
	</div>

<?php require "../menu/footer.php";?>
</body>
</html>