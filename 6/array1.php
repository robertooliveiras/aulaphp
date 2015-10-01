<?php
include_once '../util.php';
include_once 'topo.php';

$a["valor do índice 0"] = 1;
$a[0][1] = 2;

$b = array("a","b","c");
imprimeRecursivo($a);
imprimeRecursivo($b);

include_once 'footer.php';


