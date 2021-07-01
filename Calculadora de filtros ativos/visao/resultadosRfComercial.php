<?php 
	if(isset($_SESSION["resultadoRfComercial"])){
		$resultados = array();
		$x = unserialize($_SESSION["resultadoRfComercial"]);
		$resultados = explode(";", $x);
		?>
			<p><b>Fo:</b> <?= $resultados["0"]?> ,</p>
			<p><b>Wo:</b> <?= $resultados["1"]?> ,</p>
			<p><b>Qo:</b> <?= $resultados["2"]?> ,</p>
			<p><b>Fc1 * Fc2:</b> <?= $resultados["3"]?> ,</p>
			<p><b>Fc2 - Fc1:</b> <?= $resultados["4"]?><p>
			<br>
			<a type="button" style="color: black; height: 4; padding-right: 10px;" href="controle/limpar.php">Limpar</a>

		<?php 
	}
	else{
		?>
		<p><b>Fo:</b>,</p> 
		<p><b>Wo:</b>,</p>
		<p><b>Qo:</b>,</p> 
		<p><b>Fc1 * Fc2:</b>,</p>
		<p><b>Fc2 - Fc1:</b><p>
		<?php
	}
	
?>