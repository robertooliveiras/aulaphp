<?php

function imprimeRecursivo ($arr) {
    foreach ($arr as $k => $v ) {
        if(is_array($v)) {
            imprimeRecursivo($v);
        }else{
            var_dump($v);
        }
    }
}