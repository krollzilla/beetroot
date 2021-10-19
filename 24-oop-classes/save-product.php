<?php

require_once 'shopping-cart.php';


$orderedGoodsKeys = array_keys($_POST, 'on', true);
$userId = 14; // задаю юзера хардкодом, тк без авторизации

if (isset($_POST['submit'])) {
    try {
        (new ShoppingCart)->addOrderedProducts($orderedGoodsKeys, $userId);
        (new ShoppingCart)->showShoppingCart($userId);
    } catch (Exception $e) {
        echo($e->getMessage());
    }
}
