<br>
<br>
<br>
<h3 style="text-align: center;">Filtro Ativo Passa Faixa de Segunda Ordem</h3>
	<br>
	<br>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col">
			<img src="img/PF.MFB.png" height="400">
		</div>
		<div class="col">
			<div>
				<h4>Parâmetros:</h4>
				<br>
				<form action="controle/calcularPf.php" method="post">
					<label for="k">Ganho de tensão (K)</label>
					<input type="" name="k">
					<br>
					<label for="fc1">Frequência de corte baixa (Fc1)</label>
					<input type="" name="fc1">
					<br>
					<label for="fc2">Frequência de corte alta (Fc2)</label>
					<input type="" name="fc2">

					<br>
					<p>*Filtro do tipo Chebyshev</p>
					<button>Calcular</button>
				</form>
			</div>
			<div  style="text-align: left;">
				<br>
				<h4>Resultados</h4>
				<?=include("visao/resultadosPf.php");?>	
			</div>
		</div>
	</div>