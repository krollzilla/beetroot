<?php

try {
    $connection = new PDO('mysql:host=db;port=3306;dbname=beetroot', 'root', 'root');
    $connection->query('select 1');
} catch (Throwable $e) {
    print "Error!: {$e->getMessage()} <br/>";
}
