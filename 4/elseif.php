<?php include_once 'topo.php';?>
		<div id="content">
			<h1>sintaxe básica:</h1>
			<p>if([condição]){ [faça]; }elseif{ [faça]; }else{ [faça]; }</p>
			<p>Operadores de comparação</p>
			<?php
			if (1==2) {
				echo "um é igual a dois";
			}elseif (2==2){
				echo "dois é igual a dois";
			}else {
				echo "nenhum dos dois";
			}
			
			?>

			<div>
			<?php if (1==2):?>
			<p>um é igual a dois</p>
			<?php elseif(2==2):?>
			<p>dois é igual a dois</p>
			<?php else:?>
			<p>nenhum dos dois</p>
			<?php endif;?>
			</div>

		</div>

<?php include_once 'footer.php';?>