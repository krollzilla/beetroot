<?php

$users = [];

$users["0"] = ["name" => "Oleksandra", "email" => "oleksandra@test.com", "language" => "RU"];
$users["1"] = ["name" => "Anton", "email" => "anton@test.com", "language" => "UA"];
$users["2"] = ["name" => "Olga", "email" => "olga@test.com", "language" => "EN"];
$users["3"] = ["name" => "Oleg", "email" => "oleg@test.com", "language" => "FR"];
$users["4"] = ["name" => "Vladimir", "email" => "vova@test.com", "language" => "DE"];

$languages["RU"] = ["Привет!"];
$languages["UA"] = ["Привіт!"];
$languages["EN"] = ["Hello!"];
$languages["FR"] = ["Bonjour!"];
$languages["DE"] = ["Hallo!"];

$minUser = $users[min(array_keys($users))];
$maxUser = $users[max(array_keys($users))];

foreach ($languages[$minUser["language"]] as $key => $val) {
    echo $val . PHP_EOL;
}

if ($minUser["language"] !== $maxUser["language"]) {
    foreach ($languages[$maxUser["language"]] as $key => $val) {
        echo $val . PHP_EOL;
    }
}
