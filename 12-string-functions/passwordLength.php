<?php

// 3
$password = $argv[1] ?? null;
if (!$password) {
    die('Не введен пароль!' . PHP_EOL);
}
$passwordLength = iconv_strlen($password);
if ($passwordLength <= 7 || $passwordLength >= 12) {
    die("Длина вашего пароля: $passwordLength. Пароль не подходит." . PHP_EOL);
}
echo("Длина пароля: $passwordLength. Пароль подходит." . PHP_EOL);