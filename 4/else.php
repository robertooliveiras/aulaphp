<?php include_once 'topo.php';?>

		<div id="content">
		<h1>sintaxe básica:</h1>
		<p>if([condição]){ [faça]; }else{ [faça]; }</p>
		<p>Operadores de comparação</p>
		<?php 
		$x = 1; // Operador de atribuição
		
		if($x==2){ // Operador de comparação
			echo "realmente $x é igual a 2 <br />";
		}else{
			echo "x não é igual a 2.<br />";
		}
		
		$login = 'admin';
		$senha = '123';
		
		if($login == 'admin' and $senha = '123'){
			echo "logado no sistema";
		}else{
			echo "login e senha não conferem";
		}
		
		?>
		</div>

<?php include_once 'footer.php';?>