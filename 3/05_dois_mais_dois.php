<?php
/*
 * Primeiro multiplicação e divisão, depois soma e subtração
 * Os parenteses comandam as operações
 * */
?>
<h1>Dois mais dois</h1>
<table>
	<tr>
		<td align="right">2 + 2 / 2 = </td>
		<td><?= 2 + 2 / 2 ?></td>
	</tr>
	<tr align="right">
		<td>(2 + 2) / 2 = </td>
		<td><?= (2 + 2) / 2 ?></td>
	</tr>
	<tr align="right">
		<td>(((2 + 2) / 2) / 2) * 2 = </td>
		<td><?= (((2 + 2) / 2) / 2) * 2 ?></td>
	</tr>
</table>
