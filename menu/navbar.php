<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>

	<?php require "css&js.php"?>

	<nav class="navbar navbar-default menu">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li><a href="
					<?php
						if (file_exists($home1)) { 
				    		echo $home1; 
						}else { 
						    echo $home2; 
						} 
					?>">Home</a></li>
				<li><a href="
					<?php
						if (file_exists($sobre1)) { 
				    		echo $sobre1; 
						}else { 
						    echo $sobre2; 
						} 
					?>">Sobre</a></li>
				<li><a href="
					<?php
						if (file_exists($contato1)) { 
				    		echo $contato1; 
						}else { 
						    echo $contato2; 
						} 
					?>">Contato</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<a href="
					<?php
						if (file_exists($loginA1)) { 
				    		echo $loginA1; 
						}else { 
						    echo $loginA2; 
						} 
					?>"><img class="icoAcessar" src="
						<?php
							if (file_exists($iconeU1)) { 
					    		echo $iconeU1; 
							}else { 
							    echo $iconeU2; 
							} 
						?>" title="Acessar"></a>
			</ul>
		</div>
	</nav>
</body>
</html>