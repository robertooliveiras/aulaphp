<?php
if (1==2) {
	echo "um � igual a dois";
}elseif (2==2){
	echo "dois � igual a dois";
}else {
	echo "nenhum dos dois";
}

?>


<div>
<?php if (1==2):?>
<p>um � igual a dois</p>
<?php elseif(2==2):?>
<p>dois � igual a dois</p>
<?php else:?>
<p>nenhum dos dois</p>
<?php endif;?>
</div>