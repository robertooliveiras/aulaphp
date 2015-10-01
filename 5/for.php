<?php
include_once 'topo.php';
for ($i=0; $i<10; $i++) {
	echo "<br />o i é igual a " . $i;
}
?>

<ul>
<?php for ($i = 0; $i < 5; $i++):?>
<li><?php echo "menu " . $i ?></li>
<?php endfor;?>
</ul>

<?php include_once 'footer.php';