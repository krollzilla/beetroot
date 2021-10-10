<?php

$numRows = 20;
var_export(generate($numRows));


/**
 * @param  int  $numRows
 * @return array
 */
function generate(int $numRows): array
{
    $output[0] = [1];
    for ($i = 1; $i < $numRows; $i++) {
        $output[$i] = [1];
        for ($j = 1; $j < $i; $j++) {
            $output[$i] = array_merge($output[$i], [findNumberValue($i, $j)]);
        }
        $output[$i] = array_merge($output[$i], [1]);
    }

    return $output;
}

/**
 * @param  int  $n
 * @param  int  $m
 * @return int
 */
function findNumberValue(int $n, int $m)
{
    return round((factorial($n) / (factorial($m) * factorial($n - $m))), 0);
}

/*
function factorial(int $n): string
{
    return gmp_strval(gmp_fact($n));
}
 * */

/**
 * @param  int  $n
 * @return float|int
 */
function factorial(int $n)
{
    if ($n <= 0) {
        return 1;
    }

    return round(($n * factorial($n - 1)), 0);
}
