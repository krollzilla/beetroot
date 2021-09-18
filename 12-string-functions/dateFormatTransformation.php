<?php

// 1
$date = '31-12-2020';
$formattedDate = date_format(date_create($date), 'Y.m.d');
echo "Было $date, стало $formattedDate." . PHP_EOL;
