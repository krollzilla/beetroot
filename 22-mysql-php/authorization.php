<?php

require_once 'db-connect.php';

if (isset($_POST['authorization'])) {
    $login = $_POST["login"];
    $password = $_POST["password"];
    getUser($login, $password, $connection);
}

function getUser(string $login, string $password, object $connection): void
{
    $data = $connection->prepare(
            'select user_login, user_password, user_name from users where user_login = ? and user_password = ?;'
    );
    $data->execute([$login, $password]);
    $result = $data->fetch();

    if (empty($result)) {
        $output = "Ошибка авторизации, логин и/или пароль неверный или не введен. <br>";
    } else {
        $output = "Приветствуем, $result[user_name]";
    }
    echo "<pre>";
    print_r($output);
    echo "</pre>";
}

?>
<title>Авторизация</title>
<form action="index.php" method="POST">
    <div>
        <input type="submit" name="exit" value="На главную">
    </div>
</form>
