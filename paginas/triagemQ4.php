<!DOCTYPE html>
<html>
<head>
<?php require "../menu/css&js.php";?>
	<!--JS cidade-estado-->
	<script src="https://gist.githubusercontent.com/letanure/3012978/raw/2e43be5f86eef95b915c1c804ccc86dc9790a50a/estados-cidades.json"></script>
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
					<select class="form-control sCidEst" id="estado">
			    		<option value="XX" disabled selected hidden>Selecionar Estado</option>
					    <option value="AC">Acre</option>
					    <option value="AL">Alagoas</option>
					    <option value="AP">Amapá</option>
					    <option value="AM">Amazonas</option>
					    <option value="BA">Bahia</option>
					    <option value="CE">Ceará</option>
					    <option value="DF">Distrito Federal</option>
					    <option value="ES">Espírito Santo</option>
					    <option value="GO">Goiás</option>
					    <option value="MA">Maranhão</option>
					    <option value="MT">Mato Grosso</option>
					    <option value="MS">Mato Grosso do Sul</option>
					    <option value="MG">Minas Gerais</option>
					    <option value="PA">Pará</option>
					    <option value="PB">Paraíba</option>
					    <option value="PR">Paraná</option>
					    <option value="PE">Pernambuco</option>
					    <option value="PI">Piauí</option>
					    <option value="RJ">Rio de Janeiro</option>
					    <option value="RN">Rio Grande do Norte</option>
					    <option value="RS">Rio Grande do Sul</option>
					    <option value="RO">Rondônia</option>
					    <option value="RR">Roraima</option>
					    <option value="SC">Santa Catarina</option>
					    <option value="SP">São Paulo</option>
					    <option value="SE">Sergipe</option>
					    <option value="TO">Tocantins</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<select class="form-control sCidEst" id="cidade">
			    		<option disabled selected hidden>Selecionar Cidade</option>
			  		</select>
				</td>
			</tr>
		</table>
	<div class="container-fluid">
		<div class="form-group">
			<a class="btn btn-default btnTriagem" href="selectMentor.php" role="button">Próximo</a>
		</div>
	</div>

<?php require "../menu/footer.php";?>
</body>
</html>