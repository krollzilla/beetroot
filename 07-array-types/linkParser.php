<?php
$link = $argv [1];
echo ('LINK PARSER OUTPUT:')  . PHP_EOL;
echo ('schema: ') . parse_url("$link", 0) . PHP_EOL;
echo ('host: ') . parse_url("$link", 1) . PHP_EOL;
echo ('path: ') . parse_url("$link", 5) . PHP_EOL;
echo ('query: ') . parse_url("$link", 6) . PHP_EOL;
echo ('fragment: ') . parse_url("$link", 7) . PHP_EOL;



