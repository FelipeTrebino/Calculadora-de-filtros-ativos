<br>
<br>
<br>
<br>
<br>
	<div class="row">	
		<div class="col-md-3"></div>
		<div class="col">
			<img src="img/valoresComerciaisResitores.png" height="800">
		</div>
		<div class="col">
			<div class="row">
				<div class="col">
					<h4>Parâmetros para cálculo com valores comerciais:</h4>
					<br>
					<form action="controle/calcularRfComercial.php" method="post">
						<label for="r1">Resistência 1</label>
						<input type="" name="r1">
						<br>
						<label for="r2">Resistência 2</label>
						<input type="" name="r2">
						<br>
						<label for="r3">Resistência 3</label>
						<input type="" name="r3">
						<br>
						<label for="c">Capacitor</label>
						<input type="" name="c">
						<br>
						<button>Calcular</button>
					</form>
				</div>
				<div class="col" style="text-align: left;">
					<br>
					<h4>Resultados</h4>
					<?=include("visao/resultadosRfComercial.php");?>	
				</div>
			</div>
		</div>
	</div>