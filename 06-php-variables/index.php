<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP variables</title>
    </head>
    <body>
    <?php
    $name = 'Oleksandra';
    $surname = 'Anisimova';
    $adress = 'Kyiv, Ukraine';
    $tel = '+380677581995';
    $email = 'krollzilla@gmail.com';

    ?>
        <div id="app">
            <form action="registry">
                <label for="name">Name</label>
                <br>
                <input type="text" id="name" value="<?=$name;?>">
                <br>
                <label for="surname">Surname</label>
                <br>
                <input type="text" id="surname" value="<?=$surname;?>">
                <br>
                <label for="adress">Adress</label>
                <br>
                <input type="text" id="adress" value="<?=$adress;?>">
                <br>
                <label for="tel">Telephone number</label>
                <br>
                <input type="text" id="tel" value="<?=$tel;?>">
                <br>
                <label for="email">Email</label>
                <br>
                <input type="text" id="email" value="<?=$email;?>">
                <br>
            </form>
        </div>
    </body>
</html>