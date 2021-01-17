<!DOCTYPE html>
<html>
<?php require "../menu/css&js.php";?>
	<title></title>
</head>
<body>
<?php require "../menu/navbar.php";?>

	<div class="container-fluid info">
		<div class="navbar navbar-default chathead">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="#"><img class="imgIcon mentorIcon" src="../imagens/genMentorIco.png" title="Mentor"></a></li>
				</ul>
			</div>
		</div>
		<h2>A Mentoria</h2>
		<h5>Mentoria de 2 meses</h5>
		<h5>Disponibilidade de 2 horas, 3 vezes na semana para conversar</h5>
		<br>
		<h5>Comportmento</h5>
		<h5>Conhecimento/Educação</h5>
		<h5>Carreira</h5>
		<h2>O Mentor</h2>
		<h5>Brasileiro, 56 anos de Nova Iguaçu, RJ</h5>
		<h5>Formado em Farmácia pela UFRJ em 1996</h5>
		<h5>Também qualificado como Escritor e composito</h5><br><br><h5> </h5><br><
	</div>
	<div class="container-fluid chat">
		<div class="navbar navbar-default chathead">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="menu.php"><img class="imgIcon" src="../imagens/voltarAzul.png" title="Voltar"></a></li>
					<li><h1 class="corrige">Mentor Alex Russo</h1></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="emDesenvolvimento.php">
						<img class="imgIcon" src="../imagens/progresso.png" title="Seu progresso"></a></li>
					<li><a href="emDesenvolvimento.php">
						<img class="imgIcon" src="../imagens/feedbackAzul.png" title="Feedback"></a></li>
					<li><a href="emDesenvolvimento.php">
						<img class="imgIcon" src="../imagens/anexarAzul.png" title="Anexar arquivo"></a></li>
				</ul>
			</div>
		</div>
		<h3><br></h3>
		<table class="chatbox">
			<tr>
				<td></td>
				<td><img class="msgIco dir" src="../imagens/bChatEnvio.png"></td>
				<td><img class="userIco" src="../imagens/genMenteeIco.png"></td>
			</tr>
			<tr>
				<td><img class="userIco" src="../imagens/genMentorIco.png"></td>
				<td><img class="msgIco esq" src="../imagens/bChatResposta.png"></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td><img class="msgIco dir" src="../imagens/bChatEnvio.png"></td>
				<td><img class="userIco" src="../imagens/genMenteeIco.png"></td>
			</tr>
		</table>
		<div class="navbar navbar-default chatin">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="#"><img class="imgIcon" src="../imagens/editAzul.png" title="Editar"></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><textarea class="form-control" cols="124"></textarea></li>
					<li><a href="#"><img class="imgIcon" src="../imagens/sendAzul.png" title="Enviar"></a></li>
				</ul>
			</div>
		</div>
	</div>

<?php require "../menu/footer.php";?>
</body>
</html>