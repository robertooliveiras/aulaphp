<?php
/*
 * Exercício M3Ep1_2
 * reduzindo númeor de parenteses
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

$aa = 6*5;
$ee = 3+18/(2*3);
$ii = (10*8+3)*9;
$bb = 2+6*5;
$ff = 6/3+8/2;
$jj = -12*-4+3*-4;
$cc = 2+3*6/6;
$gg = ((3+8/2)*4)+3*2;
$dd = 2*8/4;
$hh = 6*3*3+6-10;

$ra = '6*5';
$re = '3+18/(2*3)';
$ri = '(10*8+3)*9';
$rb = '2+6*5';
$rf = '6/3+8/2';
$rj = '-12*-4+3*-4';
$rc = '2+3*6/6';
$rg = '((3+8/2)*4)+3*2';
$rd = '2*8/4';
$rh = '6*3*3+6-10';

?>

<?php include_once 'topo.php';?>

		<div id="content">
			<table>
				<tr>
					<td align="right">a = <?= $ca ?> = <?= $ra ?> = </td>
					<td><?= $a ?> = <?= $aa ?></td>
				</tr>
				<tr>
					<td align="right">e = <?= $ce ?> = <?= $re ?> = </td>
					<td><?= $e ?> = <?= $ee ?></td>
				</tr>
				<tr>
					<td align="right">i = <?= $ci ?> = <?= $ri ?> = </td>
					<td><?= $i ?> = <?= $ii ?></td>
				</tr>
				<tr>
					<td align="right">b = <?= $cb ?> = <?= $rb ?> = </td>
					<td><?= $b ?> = <?= $bb ?></td>
				</tr>
				<tr>
					<td align="right">f = <?= $cf ?> = <?= $rf ?> = </td>
					<td><?= $f ?> = <?= $ff ?></td>
				</tr>
				<tr>
					<td align="right">j = <?= $cj ?> = <?= $rj ?> = </td>
					<td><?= $j ?> = <?= $jj
					 ?></td>
				</tr>
				<tr>
					<td align="right">c = <?= $cc ?> = <?= $rc ?> = </td>
					<td><?= $c ?> = <?= $cc ?></td>
				</tr>
				<tr>
					<td align="right">g = <?= $cg ?> = <?= $rg ?> = </td>
					<td><?= $g ?> = <?= $gg ?></td>
				</tr>
				<tr>
					<td align="right">d = <?= $cd ?> = <?= $rd ?> = </td>
					<td><?= $d ?> = <?= $dd ?></td>
				</tr>
				<tr>
					<td align="right">h = <?= $ch ?> = <?= $rh ?> = </td>
					<td><?= $h ?> = <?= $hh ?></td>
				</tr>
			</table>
		
		</div>

<?php include_once 'footer.php';?>
