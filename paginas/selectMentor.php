<!DOCTYPE html>
<html>
<?php require "../menu/css&js.php";?>
	<title></title>
</head>
<body>
<?php require "../menu/navbar.php";?>

	<div class="container-fluid">
		<h1>SELEÇÃO DE MENTORES</h1>
	</div>
	<div class="container-fluid">
		<h4>Alex Russo</h4>
	</div class="container-fluid">
		<table class="tMatch">
			<tr>
				<td rowspan="2"><a href=""><img class="divSetaE" src="../imagens/setaEazul.png"></a></td>
				<td colspan="2"><a href=""><img class="genM" src="../imagens/genMentor.png"></a></td>
				<td rowspan="2"><a href=""><img class="divSetaD" src="../imagens/setaDazul.png"></a></td>
			</tr>
			<tr>
				<td><a href="" type="button" data-toggle="modal" data-target="#exampleModalCenter">
					<img class="iconeMatch 3p" src="../imagens/3pAzul.png"></a></td>
				<td><a href="menu.php"><img class="iconeMatch match" src="../imagens/matchAzul.png"></a></td>
				<td></td>
			</tr>
		</table>
	</div>
	<!-- Para fins de representação das telas, esta janela mostra só um valor, independente do mentor apresentado -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
	    	<div class="modal-content">
		     	<div class="modal-header">
		        	<h5 class="modal-title" id="exampleModalLongTitle">Mais Sobre [Nome mentor]</h5>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		         	<img class="bFechar" src="../imagens/fechar.png">
		        	</button>
		      	</div>
		      	<div class="modal-body">
		        <h3>Lorem Ipsum</h3>
		        <h4 class="corrigirCor">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
		        </h5>
		      	</div>
		      	<div class="modal-footer">
		      	</div>
	    	</div>
	  	</div>
	</div>

<?php require "../menu/footer.php";?>
</body>
</html>