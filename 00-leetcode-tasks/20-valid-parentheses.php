<?php

const OPEN_PARENTHESES = ['(', '[', '{'];
const PARENTHESES_MAP = [
    ')' => '(',
    '}' => '{',
    ']' => '[',
];

class Solution
{
    function isValid(string $s): bool
    {
        $stack = [];
        $length = strlen($s);


        for ($i = 0; $i < $length; $i++) {
            if ($this->isOpenParentheses($s[$i])) {
                // $char values: ) ] }
                $stack[] = $s[$i];
            } else {
                // $char values: ( [ {
                // знаходимо відкриваючу скобку, яка відповідає цій закриваючій
                $openBracket = PARENTHESES_MAP[$s[$i]];
                // перевіряємо, чи останній елемент стека відповідає скобці із пункту 1.
                $lastStackElement = array_pop($stack);
                if ($openBracket !== $lastStackElement) {
                    return false;
                }
            }
        }

        return empty($stack);
    }

    function isOpenParentheses($char): bool
    {
        return in_array($char, OPEN_PARENTHESES, true);
    }
}

/*

function isValid($s)
    {
        $chars = ['[]', '()', '{}'];
        $n = ceil(strlen($s)/2);

        for ($i=0;$i<=$n;$i++) {
            $s = str_replace($chars, '', $s);
        }
        if (empty($s)) {
            return true;
        }
    }

 */