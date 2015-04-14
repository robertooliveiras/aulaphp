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