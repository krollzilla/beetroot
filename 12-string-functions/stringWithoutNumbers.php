<?php

// 4
$string = '1a2b3c4b5d6e7f8g9h0';
$stringWithoutNumbers = preg_replace("/\d/", "", $string);
echo "Было '$string', стало '$stringWithoutNumbers'." . PHP_EOL;