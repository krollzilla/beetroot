<?php


$login = readline("Enter your login: ");
$password = readline("Enter your password: ");
if (!$password || !$login) {
    die(PHP_EOL . 'Authorization failed. You did not enter login/password'.PHP_EOL);
}
$fileName = 'users.json';
$users = readJson($fileName);
$userDescription = checkUser($login, $password, $users);
echo $userDescription;

function readJson($fileName)
{
    if (!file_exists($fileName)) {
        die (PHP_EOL . "Can not read your data from users file. File '$fileName' does not exist!".PHP_EOL);
    }
    $jsonFile = file_get_contents($fileName);
    if ($jsonFile === false) {
        die (PHP_EOL . "Error while reading file '$fileName'.".PHP_EOL);
    }
    try {
        $jsonArray = json_decode($jsonFile, true, 512, JSON_THROW_ON_ERROR);
    } catch (JsonException $exception) {
        die (PHP_EOL . "Error while decoding file '$fileName'.".PHP_EOL);
    }
    return $jsonArray;
}

function checkUser($login, $password, $users)
{
    $user = [];
    foreach ($users as $key => $val) {
        if ($val['Login'] === $login && $val['Password'] ===$password){
            $user = $val;
        }
    }
    if (empty($user)) {
        die (PHP_EOL . "Authorization failed. You entered login/password incorrectly".PHP_EOL);
    }
    return PHP_EOL . "Login: $login." . PHP_EOL . "User name: " . $user["Name"] . ". User email: " . $user["Email"] .
        ". User language: ". $user["Language"] . ". " .  PHP_EOL;
}
