<br>
<br>
<br>
<h3 style="text-align: center;">Filtro Ativo Refeita Faixa de Segunda Ordem</h3>
	<br>
	<br>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col">
			<img src="img/RF.MFB.png" height="400">
		</div>
		<div class="col">
			<div>
				<h4>Parâmetros:</h4>
				<br>
				<form action="controle/calcularRf.php" method="post">
					<label for="fc1">Frequência de corte baixa (Fc1)</label>
					<input type="" name="fc1">
					<br>
					<label for="fc2">Frequência de corte alta (Fc2)</label>
					<input type="" name="fc2">
					<br>
					<p>*Filtro com estrutura VCVS</p>
					<button>Calcular</button>		
				</form>		
			</div>
			<div  style="text-align: left;">
				<br>
				<h4>Resultados</h4>
				<?=include("visao/resultadosRf.php");?>	
			</div> 
	</div>
