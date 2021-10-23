<?php

$num=121;
var_dump(isPalindrome($num)) ;

/**
 * @param  Integer  $x
 * @return Boolean
 */
function isPalindrome($x)
{
    $y = strrev($x);
    return $y == $x;
}
