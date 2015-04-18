<?php include_once 'topo.php';?>

		<div id="content">
		<h1>sintaxe básica:</h1>
		<p>if([condição]){ faça }</p>
		<p>Operadores de comparação</p>
		<ul>
			<li>> Maior</li>
			<li>< Menor</li>
			<li><= Menor ou igual</li>
			<li>>= Maior ou igual</li>
			<li>== igual</li>
			<li><> diferente</li>
		</ul>
		<?php 
		$x = 1; // Operador de atribuição
		
		if($x==1){ // Operador de comparação
			echo "realmente $x é igual a 1 <br />";
			$x = 10;
			echo "agora X recebeu o valor 10.<br />";
		}
		
		if ($x > 1) 
			echo "X é maior que 1 <br />"; // Apenas uma operação não necessita de chaves { }
		
		if ($x < 1) {
			echo "X é menor que 1 <br />";
		}
		
		if ($x >= 1) {
			echo "X é maior ou igual a 1 <br />";
		}
		
		if ($x <= 1) {
			echo "X é menor ou igual a 1 <br />";
		}
		
		if ($x == 1 and $x < 10) {
			echo "X é igual a 1 e é menor que 10 <br />";
		}
		
		if ($x == 10 and $x > 1) {
			echo "X é igual a 10 e é maior que 1 <br />";
		}
		
		if ($x == 1 or $x >= 10) {
			echo "X é igual a 1 ou é maoior ou igual a 10 <br />";
		}
		
		$conta = 555675;
		$senha = 1234;
		
		if ($conta == 555675 and $senha == 1234) {
			echo "Pode sacar o dinheiro <br />";
		}
		

		if ($conta == 555675 and $senha == 123) {
			echo "Pode sacar o dinheiro erro <br />";
		}
		
		$y = true;
		

		if ($y) {
			echo "Y é igual a true <br />";
		}
		?>
		</div>

<?php include_once 'footer.php';?>