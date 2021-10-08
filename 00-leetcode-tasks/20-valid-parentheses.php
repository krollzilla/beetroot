<?php
var_dump(checkIfBalanced("()"));

function checkIfBalanced($expression)
{
    $stack = [];
    $startSymbols = ['{', '(',  '['];
    $pairs = ['{}', '()', '[]'];

    for ($i = 0, $len = strlen($expression); $i < $len; $i++) {
        $curr = $expression[$i];
        if (in_array($curr, $startSymbols, true)) {
            $stack[] = $curr;
        } else {
            $prev = array_pop($stack);
            $pair = "$prev$curr";
            if (!in_array($pair, $pairs)) {
                return false;
            }
        }
    }

    return count($stack) === 0;
}