<?php

$fileName = 'users.json';
if (!file_exists($fileName)) {
    die ("Файл '$fileName' отсутствует!".PHP_EOL);
}
$jsonFile = file_get_contents($fileName);
if ($jsonFile === false) {
    die ("Ошибка чтения файла '$fileName'.".PHP_EOL);
}
$jsonArray = json_decode($jsonFile, true);


