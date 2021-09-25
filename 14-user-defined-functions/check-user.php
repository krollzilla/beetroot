<?php

/**
 * @param  string  $login
 * @param  string  $password
 * @param  array  $users
 * @return string
 * @throws Exception
 */
function checkUser(string $login, string $password, array $users): string
{
    $user = [];
    if (!$password || !$login) {
        throw new Exception(PHP_EOL.'Authorization failed. You did not enter login/password'.PHP_EOL);
    }

    foreach ($users as $key => $val) {
        if ($val['Login'] === $login && $val['Password'] === $password) {
            $user = $val;
        }
    }

    if (empty($user)) {
        throw new Exception(PHP_EOL."Authorization failed. You entered login/password incorrectly".PHP_EOL);
    }

    return PHP_EOL."Login: $login.".PHP_EOL."User name: ".$user["Name"].". User email: ".$user["Email"].
        ". User language: ".$user["Language"].". ".PHP_EOL;
}
