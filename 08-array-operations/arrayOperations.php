<?php

$users = [];

$users["0"] = ["name" => "Oleksandra", "email" => "oleksandra@test.com"];
$users["1"] = ["name" => "Anton", "email" => "anton@test.com"];
$users["2"] = ["name" => "Olga", "email" => "olga@test.com"];
$users["3"] = ["name" => "Oleg", "email" => "oleg@test.com"];
$users["4"] = ["name" => "Vladimir", "email" => "vova@test.com"];

//количество юзеров
echo ('Number of users: ' . count($users)) . PHP_EOL;

// сортировка по ключам по убыванию
krsort($users);
echo ('Sorted users: ') . PHP_EOL;
print_r($users);

// первый юзер
ksort($users);
echo ('First user: ') . PHP_EOL;
print_r(reset($users));

// последний юзер
echo ('Last user: ') . PHP_EOL;
print_r(end($users));

// следующий минимальному юзер
echo ('First +1 user: ') . PHP_EOL;
reset($users);
print_r(next($users));

// передыдущий максимальному юзер
echo ('Last -1 user: ') . PHP_EOL;
end($users);
print_r(prev($users));

// удалить минимального юзера
echo ('Without first user: ') . PHP_EOL;
reset($users);
unset($users[key($users)]);
print_r($users);






