<?php 
	if(isset($_SESSION["resultadoPf"])){
		$resultados = array();
		$x = unserialize($_SESSION["resultadoPf"]);
		$resultados = explode(";", $x);
		?>
			<p><b>C1:</b> <?= $resultados["3"]?> µF, 
			<b>C2:</b> <?= $resultados["3"]?> µF</p>
			<p><b>R1:</b> <?= $resultados["0"]?> kΩ, 
			<b>R2:</b> <?= $resultados["1"]?> kΩ</p>
			<p><b>R3:</b> <?= $resultados["2"]?> kΩ<p>
		
			<br>
			<a type="button" style="color: black; height: 4; padding-right: 10px;" href="controle/limpar.php">Limpar</a>

		<?php 
	}
	else{
		?>
		<p><b>C1:</b>  µF, 
			<b>C2:</b> µF</p>
			<p><b>R1:</b>  kΩ, 
			<b>R2:</b> kΩ</p>
			<p><b>R3:</b> kΩ</p>
		<?php
	}
	
?>