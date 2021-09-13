<?php


$users = [];

$users["0"] = ["name" => "Oleksandra", "email" => "oleksandra@test.com", "language" => "RU"];
$users["1"] = ["name" => "Anton", "email" => "anton@test.com", "language" => "RU"];
$users["2"] = ["name" => "Olga", "email" => "olga@test.com", "language" => "EN"];
$users["3"] = ["name" => "Oleg", "email" => "oleg@test.com", "language" => "FR"];
$users["4"] = ["name" => "Vladimir", "email" => "vova@test.com", "language" => "UA"];
$users["5"] = ["name" => "Oleksandra", "email" => "oleksandra@test.com", "language" => "UA"];
$users["6"] = ["name" => "Anton", "email" => "anton@test.com", "language" => "UA"];
$users["7"] = ["name" => "Olga", "email" => "olga@test.com", "language" => "EN"];
$users["8"] = ["name" => "Oleg", "email" => "oleg@test.com", "language" => "DE"];
$users["9"] = ["name" => "Vladimir", "email" => "vova@test.com", "language" => "UA"];
$users["10"] = ["name" => "Oleksandra", "email" => "oleksandra@test.com", "language" => "RU"];
$users["11"] = ["name" => "Anton", "email" => "anton@test.com", "language" => "EN"];
$users["14"] = ["name" => "Olga", "email" => "olga@test.com", "language" => "DE"];
$users["13"] = ["name" => "Daniil", "email" => "daniil@test.com", "language" => "RU"];
$users["15"] = ["name" => "Anastasiia", "email" => "anastasiia@test.com", "language" => "FR"];

$maxKey = max(array_keys($users));
$minKey = min(array_keys($users));

echo '1. ПОВТОРЯЮЩИЕСЯ ИМЕНА В МАССИВЕ:' . PHP_EOL;

$names = array_column($users, 'name');
$namesCounted = array_count_values($names);

foreach ($namesCounted as $key => $val) {
    if ($val > 1) {
        echo ("Количество повторений имени " . $key . ": " . $val) . PHP_EOL;
    }
}

echo '--------------------------' . PHP_EOL;
echo '2. МАСИВЫ С РАЗДЕЛЕННЫМИ ПО ЯЗЫКУ ПОЛЬЗОВАТЕЛЯМИ:' . PHP_EOL;

$languages = array_unique(array_values(array_column($users, 'language')));

foreach ($languages as $key => $val) {
    $arrayLanguage = $val;
    $$arrayLanguage = [];                               // называем масивы изменяющимися значениями кода языка
    for ($i = $minKey; $i <= $maxKey; $i++) {
        if (array_key_exists($i, $users)) {             // на случай, если какого-то ключа по порядку в масиве нет
            $currentUser = $users[$i];
            if ($currentUser["language"] === $val) {
                $$arrayLanguage[$i] = $currentUser;
            }
        }
    }
    print_r($$arrayLanguage);
}
//print_r($UA);                                         // теперь можно вызвать любой из новых массивов по коду языка


echo '--------------------------' . PHP_EOL;
echo '3. МАСИВ, ОТСОРТИРОВАННЫЙ ПО УБЫВАНИЮ:' . PHP_EOL;

$usersSorted = [];

for ($i = $maxKey; $i >= $minKey; $i--) {
    if (array_key_exists($i, $users)) {
        $usersSorted[$maxKey - $i] = $users[$i];
    }
}
var_dump($usersSorted);
