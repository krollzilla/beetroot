<?php

require_once 'reader.php';
require_once 'check-user.php';

$login = readline("Enter your login: ");
$password = readline("Enter your password: ");
$fileName = 'users.json';

try {
    $users = readJson($fileName);
    $userDescription = checkUser($login, $password, $users);
    echo $userDescription;
} catch (Exception $e) {
    echo($e->getMessage());
}

