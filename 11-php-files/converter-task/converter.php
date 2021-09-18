<?php

$fileName = 'oscar_age_female.json';
$csvFileName = 'oscar_age_female.csv';
if (!file_exists($fileName)) {
    die ("Файл '$fileName' отсутствует!" . PHP_EOL);
}
$jsonFile = file_get_contents($fileName);
if ($jsonFile === false) {
    die ("Ошибка чтения файла '$fileName'." . PHP_EOL);
}
$jsonArray = json_decode($jsonFile, true);
$csvFile = fopen($csvFileName, 'w');
$header = null;
foreach ($jsonArray as $row) {
    if (empty($header)) {
        $header = array_keys($row);
        fputcsv($csvFile, $header);
        $header = array_flip($header);
    }
    fputcsv($csvFile, array_merge($header, $row));
}
fclose($csvFile);
