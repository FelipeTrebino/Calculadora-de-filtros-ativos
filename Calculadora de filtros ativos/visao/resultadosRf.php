<?php 
	if(isset($_SESSION["resultadoRf"])){
		$resultados = array();
		$x = unserialize($_SESSION["resultadoRf"]);
		$resultados = explode(";", $x);
		?>
			<p><b>C:</b> <?= $resultados["3"]?> µF, </p>
			<p><b>R1:</b> <?= $resultados["0"]?> kΩ, 
			<b>R2:</b> <?= $resultados["1"]?> kΩ</p>
			<p><b>R3:</b> <?= $resultados["2"]?> kΩ<p>
			<p><b>Fator de qualidade:</b> <?= $resultados["4"]?><p>
			<p><b>Frequencia central:</b> <?= $resultados["5"]?><p>
		
			<br>
			<a type="button" style="color: black; height: 4; padding-right: 10px;" href="controle/limpar.php">Limpar</a>

		<?php 
	}
	else{
		?>
		    <p><b>C1:</b>  µF</p>
			<p><b>R1:</b>  kΩ,</p> 
			<p><b>R2:</b>  kΩ,</p>
			<p><b>R3:</b>  kΩ,</p>
			<p><b>Fator de qualidade:</b><p>
			<p><b>Frequencia central:</b><p>
		<?php
	}
	
?>