<?php

require_once 'db-connect.php';

if (isset($_POST['toregister'])) {
    $login = $_POST["newlogin"];
    $password = $_POST["newpassword"];
    $name = $_POST["newpassword"];
}

if (!$password || !$login || !$name) {
    $output = 'Ошибка регистрации. Не введено логин/пароль/имя.<br>';
} else {
    $output = addUser($password, $login, $name, $connection);
}

function addUser(string $password, string $login, string $name, object $connection): string
{
    $data = $connection->prepare(
            "INSERT INTO users(user_login, user_name, user_password) VALUES (:login, :name, :password);"
    );
    $data->bindParam(':login', $login);
    $data->bindParam(':name', $name);
    $data->bindParam(':password', $password);
    $data->execute();

return "Ваше имя: '$name', ваш логин: '$login', ваш пароль: '$password'. Ваши данные успешно добавлены в базу пользователей.";

}

echo "<pre>";
print_r($output);
echo "</pre>";
?>
<title>Регистрация</title>
<form action="index.php" method="POST">
    <div>
        <input type="submit" name="exit" value="На главную">
    </div>
</form>
