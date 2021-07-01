<h3 style="text-align: center;">Filtro Ativo Passa Baixa de Segunda Ordem</h3>
	<br>
	<br>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col">
			<img src="img/PB.VCVS.gif" height="400">
		</div>
		<div class="col">
			<div>
				<h4>Parâmetros:</h4>
				<br>
				<form action="controle/calcularPb.php" method="post">
					<label for="k">Ganho de tensão (K)</label>
					<input type="" name="k">
					<br>
					<label for="fc">Frequência de corte (Fc)</label>
					<input type="" name="fc">
					<br>
					<label for="filtro">Filtro</label>
					<select name="filtro">
					  <option value="2">Butterworth</option>
					  <option value="1">Chebyshev</option>
					</select>
					<br>
					<label for="nFaixas">Número de faixas</label>
					<select name="nFaixas">
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5">5</option>
					  <option value="6">6</option>
					  <option value="7">7</option>
					  <option value="8">8</option>
					</select>
					<br>
					<label for="fr">Fator de ripple p/ Chebyshev</label>
					<select name="fr">
					  <option value="0.1">0,1</option>
					  <option value="0.5">0,5</option>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					</select>
					<br>
					<p>*Filtro Chebyshev ainda não está funcionando</p>
					<button>Calcular</button>
				</form>
			</div>
			<div  style="text-align: left;">
				<br>
				<h4>Resultados</h4>
				<?=include("visao/resultadosPb.php");?>	
			</div>
		</div>
	</div>