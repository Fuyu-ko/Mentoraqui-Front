<!DOCTYPE html>
<html>
<head>

	<!--Caminhos dos diretórios-->
	<?php
		$logoC1 = "../imagens/logoCentersf.png";
		$logoC2 = "imagens/logoCentersf.png";

		$cssC1 = "../css/estilo.css";
		$cssC2 = "css/estilo.css";

		$home1 = "../index.php";
		$home2 = "index.php";

		$sobre1 = "emDesenvolvimento.php";
		$sobre2 = "paginas/emDesenvolvimento.php";

		$contato1 = "contatos.php";
		$contato2 = "paginas/contatos.php";

		$priv1 = "emDesenvolvimento.php";
		$priv2 = "paginas/emDesenvolvimento.php";

		$termos1 = "emDesenvolvimento.php";
		$termos2 = "paginas/emDesenvolvimento.php";

		$loginA1 = "login.php";
		$loginA2 = "paginas/login.php";

		$iconeU1 = "../imagens/iconeAzul.png";
		$iconeU2 = "imagens/iconeAzul.png";

		$patrocinio1 = "../imagens/patrocinio.png";
		$patrocinio2 = "imagens/patrocinio.png";

		$seguranca1 = "../imagens/seguranca.png";
		$seguranca2 = "imagens/seguranca.png";

		$webFacul1 = "../imagens/webfaculdade.png";
		$webFacul2 = "imagens/webfaculdade.png";
	?>

	<!--Icone-->
	<link rel="icon" type="text/css" href="
	<?php
		if (file_exists($logoC1)) { 
    		echo $logoC1; 
		} 
		else { 
		    echo $logoC2; 
		} 
	?>">

	<!--JQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!--Bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<!--CSS proprio-->
	<link rel="stylesheet" type="text/css" href="
	<?php
		if (file_exists($cssC1)) { 
    		echo $cssC1; 
		} 
		else { 
		    echo $cssC2; 
		} 
	?>">

	<title></title>
</head>
<body>

</body>
</html>