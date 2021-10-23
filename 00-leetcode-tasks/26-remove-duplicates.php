<?php

$nums = [0,0,1,1,1,2,2,3,3,4];
var_dump(removeDuplicates($nums));

function removeDuplicates(&$nums)
{
    $numberOfNums = count($nums);
    for ($i = 0; $i < $numberOfNums; $i++) {
        if (isset($nums[$i - 1])) {
            if ($nums[$i] === $nums[$i - 1]) {
                unset($nums[$i]);
            }
        }
    }

    return $nums;
    //return array_unique($nums);
}
