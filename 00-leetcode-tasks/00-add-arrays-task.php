<?php

$a = [1,2,3,4,5];
$b = [6,7,8,9,0];


/* 1 способ*/
$result1 = $a;
foreach ($b as $value) {
    $result1[] = $value;
}
var_export($result1);

/* 2 способ, после 7.4 версии */
$result2 = [...$a, ...$b];
var_export($result2);
