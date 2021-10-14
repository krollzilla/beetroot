<!DOCTYPE html>
<html>
<head>
    <title>Регистрация</title>
    <style>
        .row {
            margin: 10px 50px;
        }
    </style>
</head>
<body>
<div id="app">
    <form action="registration.php" method="POST">
        <h4>Введите ваши данные для регистрации:</h4>
        <div class="row">
            <label for="newlogin">Ваш логин</label>
        </div>
        <div class="row">
            <input type="text" name="newlogin">
        </div>
        <div class="row">
            <label for="newpassword">Ваш пароль</label>
        </div>
        <div class="row">
            <input type="text" name="newpassword">
        </div>
        <div class="row">
            <label for="newname">Ваше имя</label>
        </div>
        <div class="row">
            <input type="text" name="newname">
        </div>

        <div class="row">
            <input type="submit" name="toregister" value="Зарегестрироваться">
        </div>

    </form>
</div>
</body>
</html>