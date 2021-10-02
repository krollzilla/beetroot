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
    foreach ($nums as $key => $value) {
        $diff = $target - $value;
        if (isset($tmp[$diff])) {
            return [$key, $tmp[$diff]];
        }
        $tmp[$value] = $key;
    }
    return [];
}
