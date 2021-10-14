<!DOCTYPE html>
<html>
<head>
    <title>Авторизация / регистрация</title>
    <style>
        .row {
            margin: 15px 60px;
        }
    </style>
</head>
<body>
<div id="app">
    <form action="authorization.php" method="POST">
        <div class="row">
            <label for="login">Введите логин</label>
        </div>
        <div class="row">
            <input type="text" name="login">
        </div>
        <div class="row">
            <label for="password">Введите пароль</label>
        </div>
        <div class="row">
            <input type="password" name="password">
        </div>
        <div class="row">
            <input type="submit" name="authorization" value="Авторизация">
        </div>
    </form>
        <form action="registrationForm.php" method="POST">
        <div class="row">
            <input type="submit" name="registration" value="Регистрация">
        </div>
    </form>
</div>
</body>
</html>
