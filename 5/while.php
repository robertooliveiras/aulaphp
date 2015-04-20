<?php
$i = 0;
while ($i < 5) {
	echo "i é igual a ".$i;
	$i++;
}

//zerando o i
$i = 0;
?>

<ul>
<?php while ($i < 3):?>
<li>i é igual a <?php echo $i; ?></li>
<?php endwhile;?>
</ul>