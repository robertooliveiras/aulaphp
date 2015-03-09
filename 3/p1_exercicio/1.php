<?php
/*
 * Exercício M3Ep1_1
 * */
$ca = '3 + 4 * 5';
$cb = '8 / 4 + 2 * 3';
$cc = '2 * (10 - 3 * 3) - 1';
$cd = '5 * (3 + (2 + 3)) / 2 + 1';
$ce = '1 + 12 / ( (7+2) / 3) + (6-2)';
$cf = '3 + 16 / 2 + 5';
$cg = '24 / 4 - 2';
$ch = '11 % 4 + 9 / 3';
$ci = 'sqrt(9) + sqrt(16)';
$cj = '21 / 4 / 2';


$a = 3 + 4 * 5;
$b = 8 / 4 + 2 * 3;
$c = 2 * (10 - 3 * 3) - 1;
$d = 5 * (3 + (2 + 3)) / 2 + 1;
$e = 1 + 12 / ( (7+2) / 3) + (6-2);
$f = 3 + 16 / 2 + 5;
$g = 24 / 4 - 2;
$h = 11 % 4 + 9 / 3;
$i = sqrt(9) + sqrt(16);
$j = 21 / 4 / 2;

?>

<?php include_once 'topo.php';?>

		<div id="content">
			<table>
				<tr>
					<td align="right">a = <?= $ca ?> = </td>
					<td><?= $a ?></td>
				</tr>
				<tr>
					<td align="right">e = <?= $ce ?> = </td>
					<td><?= $e ?></td>
				</tr>
				<tr>
					<td align="right">i = <?= $ci ?> = </td>
					<td><?= $i ?></td>
				</tr>
				<tr>
					<td align="right">b = <?= $cb ?> = </td>
					<td><?= $b ?></td>
				</tr>
				<tr>
					<td align="right">f = <?= $cf ?> = </td>
					<td><?= $f ?></td>
				</tr>
				<tr>
					<td align="right">j = <?= $cj ?> = </td>
					<td><?= $j ?></td>
				</tr>
				<tr>
					<td align="right">c = <?= $cc ?> = </td>
					<td><?= $c ?></td>
				</tr>
				<tr>
					<td align="right">g = <?= $cg ?> = </td>
					<td><?= $g ?></td>
				</tr>
				<tr>
					<td align="right">d = <?= $cd ?> = </td>
					<td><?= $d ?></td>
				</tr>
				<tr>
					<td align="right">h = <?= $ch ?> = </td>
					<td><?= $h ?></td>
				</tr>
			</table>
		
		</div>

<?php include_once 'footer.php';?>

