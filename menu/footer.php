<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php require "css&js.php"?>

	<div class="footer">
		<table class="table">
			<tr>
				<td><img class="footImg" src="
					<?php
						if (file_exists($patrocinio1)) { 
				    		echo $patrocinio1; 
						}else { 
						    echo $patrocinio2; 
						} 
					?>"></td>
				<td><img class="footImg" src="
					<?php
						if (file_exists($seguranca1)) { 
				    		echo $seguranca1; 
						}else { 
						    echo $seguranca2; 
						} 
					?>"></td>
				<td><img class="footImg" src="
					<?php
						if (file_exists($webFacul1)) { 
				    		echo $webFacul1; 
						}else { 
						    echo $webFacul2; 
						} 
					?>"></td>
			</tr>
		</table>
		<table class="table">
			<tr>
				<td><a class="badge" href="
					<?php
						if (file_exists($home1)) { 
				    		echo $home1; 
						}else { 
						    echo $home2; 
						} 
					?>">Home</a></td>
				<td><a class="badge" href="
					<?php
						if (file_exists($sobre1)) { 
				    		echo $sobre1; 
						}else { 
						    echo $sobre2; 
						} 
					?>">Sobre</a></td>
				<td><a class="badge" href="
					<?php
						if (file_exists($contato1)) { 
				    		echo $contato1; 
						}else { 
						    echo $contato2; 
						} 
					?>">Contato</a></td>
				<td><a class="badge" href="
					<?php
						if (file_exists($priv1)) { 
				    		echo $priv1; 
						}else { 
						    echo $priv2; 
						} 
					?>">Privacidade</a></td>
				<td><a class="badge" href="
					<?php
						if (file_exists($termos1)) { 
				    		echo $termos1; 
						}else { 
						    echo $termos2; 
						} 
					?>">Termos</a></td>
			</tr>
		</table>
	</div>
</body>
</html>