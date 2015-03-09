<?php
/*
 * Pense em um númreo
 * multiplica por dois, soma 4, divide por 2 subtrai o número
 * */
$x = 453;
$vl_soma = 4; // Resultado = $vl_soma / 2

$resultado = ((($x * 2) + $vl_soma ) / 2 ) - $x;
?>
<h1>Pensei no número  [<?php echo $x; ?>] -- o resultado sempre é 2</h1>
<h2><?php echo $resultado; ?></h2>