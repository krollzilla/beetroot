<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<style>
		.row {
			margin: 5px 50px;
		}
	</style>
</head>
<body>

<div id="app">
	<form action="index.php" method="POST">
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
			<input type="text" name="password">
		</div>
		<div class="row">
			<input type="submit" name="submit" value="Авторизоваться">
		</div>
	</form>
	<div class="row">
		<?php
		if (isset($_POST['submit'])) {
			$login = $_POST["login"];
			$password = $_POST["password"];
			if (file_exists("logins.txt")) {
				/*ищем строку с логином-паролем среди значений файла logins.txt*/
				$searchLine = ($login . " " . $password);               //в таком формате записаны логины-пароли в файле
				$loginsFile = fopen("logins.txt", "r");
				while (!feof($loginsFile)) {
					$line = trim(fgets($loginsFile));
					$arrayFromFile[] = $line;
				}
				fclose($loginsFile);
				$checkLoginFlag = in_array($searchLine, $arrayFromFile);

				/*если в файле есть нужный логин-пароль - выводим приветствие, пополняем историю авторизаций в отдельном файле*/
				if ($checkLoginFlag) {
					echo 'Здравствуйте, ' . $login . '!' . PHP_EOL;
					if (file_exists("history.txt")) {
						$historyFile = fopen("history.txt", "a");       //открываем файл, если он уже создан
					} else {
						$historyFile = fopen("history.txt", "w");       //если файла еще нет - создаем
					}
					fwrite($historyFile, (date("'d.m.Y H:i:s'") . " - " . $login . PHP_EOL));
					fclose($historyFile);
				} else { /*если не найдено соответствующий логин-пароль в logins.txt: */
					echo 'Вам необходимо зарегистрироваться!';
				}
			} else { /*если logins.txt не существует: */
				echo 'Вам необходимо зарегистрироваться! База пользователей пуста!';
			}
		}
		?>
	</div>
</div>
</body>
</html>

