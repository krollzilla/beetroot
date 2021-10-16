<?php

class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows)
    {
        $result = [];
        for ($i = 0; $i < $numRows; $i++) {
            $previous = $result[$i - 1] ?? null;
            $result[$i] = $this->generateRow($previous);
        }

        return $result;
    }

    function generateRow($previousArray)
    {
        if ($previousArray === null) {
            return [1];
        }

        $rowLength = count($previousArray) + 1;
        $row = [];
        for ($i = 0; $i < $rowLength; $i++) {
            $tmp = $previousArray[$i - 1] ?? 0;
            $row[$i] =  $tmp + $previousArray[$i];
        }

        return $row;
    }
}
