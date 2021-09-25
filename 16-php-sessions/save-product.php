<?php

require_once 'reader.php';
require_once 'config.php';

if (isset($_POST['submit'])) {
    try {
        displayOrderedProducts($_POST);
    } catch (Exception $e) {
        echo($e->getMessage());
    }
}

/**
 * @param  array  $input
 * @throws Exception
 */
function displayOrderedProducts(array $input): void
{
    $products = readJson(FILENAME);

    foreach ($products as $product) {
        if ($_POST[$product["name"]] === "on") {
            $_SESSION[] = $product;
        }
    }

    if (empty($_SESSION)) {
        throw new Exception('You ordered nothing. ');
    }

    echo 'You ordered: '.'<br>';

    foreach ($_SESSION as $key => $product) {
        echo $key + 1 .') '.$product['name'].', price:'.$product['price'].'<br>';
    }
}
