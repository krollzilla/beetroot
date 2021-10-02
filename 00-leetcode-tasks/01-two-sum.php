<?php

$nums = [3, 2, 4];
$target = 6;

$output = twoSum($nums, $target);

var_export($output);

/**
 * @param  Integer[]  $nums
 * @param  Integer  $target
 * @return Integer[]
 */
function twoSum($nums, $target): array
{
    foreach ($nums as $i => $value) {
        $diff = $target - $value;
        if (isset($tmp[$diff])) {
            return [$i, $tmp[$diff]];
        }
        $tmp[$value] = $i;
    }
    return [];
}
