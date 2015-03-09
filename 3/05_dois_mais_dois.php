<?php include_once 'topo.php';?>

		<div id="content">
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
		</div>

<?php include_once 'footer.php';?>

