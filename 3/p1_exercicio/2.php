<?php
/*
 * Exercício M3Ep1_2
 * */
$a = 6*(3+2);
$e = 3+(20-2)/(2*(9-6));
$i = (((10*8)+3)*9);
$b = 2+(6*(3+2));
$f = (6/3)+(8/2);
$j = ((-12)*(-4))+(3*(-4));
$c = 2+(3*6)/(2+4);
$g = ((3+(8/2))*4)+(3*2);
$d = 2*(8/(3+1));
$h = (6*(3*3)+6)-10;


$ca = '6*(3+2)';
$ce = '3+(20-2)/(2*(9-6))';
$ci = '(((10*8)+3)*9)';
$cb = '2+(6*(3+2))';
$cf = '(6/3)+(8/2)';
$cj = '((-12)*(-4))+(3*(-4))';
$cc = '2+(3*6)/(2+4)';
$cg = '((3+(8/2))*4)+(3*2)';
$cd = '2*(8/(3+1))';
$ch = '(6*(3*3)+6)-10';

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
