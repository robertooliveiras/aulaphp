<?php

$x = 10;
$y = 5;

$soma = $x + $y;
$subtrai = $x - $y;
$multiplica = $x * $y;
$divide = $x / $y;

?>
<h1>Operações matemáticas com PHP</h1>
<h2>Onde <?php echo "x = " . $x . ", e y = " . $y; ?> </h2>
<table>
	<tr>
		<td>soma: </td>
		<td><?=$soma ?></td>
	</tr>
	<tr>
		<td>Subtração: </td>
		<td><?=$subtrai ?></td>
	</tr>
	<tr>
		<td>Multiplicação: </td>
		<td><?=$multiplica ?></td>
	</tr>
	<tr>
		<td>Divisão: </td>
		<td><?=$divide ?></td>
	</tr>	
	<tr>
		<td>incremental de x (x++), quando x = <?=$x ?>: </td>
		<td><?=$x++ ?></td>
	</tr>
	<tr>
		<td>incremental de x (x+=5), quando x = <?=$x ?>: </td>
		<td><?=$x+=5 ?></td>
	</tr>
	<tr>
		<td>decremental de x (x--), quando x = <?=$x ?>: </td>
		<td><?=$x-- ?></td>
	</tr>
	<tr>
		<td>decremental de x (x-=2), quando x = <?=$x ?>: </td>
		<td><?=$x-=2 ?></td>
	</tr>
	<tr>
		<td>concatenação: </td>
		<td><?=$x . " é o resultado atual de x." ?></td>
	</tr>
	<tr>
		<td>concatenação2: </td>
		<td>
			<?php
			$a = "School";
			$b = " of Net";
			echo $a.$b;
			?>
		</td>
	</tr>
	<tr>
		<td>concatenação3: </td>
		<td>
			<?php
			$a = "School";
			$a .= " of Net";
			echo $a;
			?>
		</td>
	</tr>
</table>
