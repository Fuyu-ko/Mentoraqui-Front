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
				<td class="active respondido triagemtd">Fase 3</td>
				<td class="active">Fase 4</td>
			</tr>
		</table>
	</div>
	<div class="container-fluid">
		<h4>De qual cidade e estado você é?</h4>
	</div>
		<table class="tTriagem">
			<tr>
				<td>
					<select class="form-control sCidEst" id="">
			    		<option disabled selected hidden>Selecionar Estado</option>
			    		<option>Estado A</option>
			    		<option>Estado B</option>
			  		</select>
				</td>
			</tr>
			<tr>
				<td>
					<select class="form-control sCidEst" id="">
			    		<option disabled selected hidden>Selecionar Cidade</option>
			    		<option>Cidade X</option>
			    		<option>Cidade Z</option>
			  		</select>
				</td>
			</tr>
		</table>
	<div class="container-fluid">
		<div class="form-group">
			<a class="btn btn-default btnTriagem" href="usuario.php" role="button">Próximo</a>
		</div>
	</div>

<?php require "../menu/footer.php";?>
</body>
</html>