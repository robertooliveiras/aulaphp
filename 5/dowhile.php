<?php
include_once 'topo.php';
$i = 1;

do {
    var_dump("i = ".$i . "| j = " . $j);
	if (empty($j)) {
		$i *= 2;
        $j = 1;
	}else{
		if($i > 2){
            $i--;
        } else {
            $i++;
        }
        $j = null;
	}
    var_dump("i = ".$i . "| j = " . $j);

} while ($i <= 5);

include_once 'footer.php';
