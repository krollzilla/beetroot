<?php

require 'config.php';
use Beetroot\Classes\ShoppingCart;

$orderedGoodsKeys = array_keys($_POST, 'on', true);
$userId = 14; // задаю юзера хардкодом, тк без авторизации

if (isset($_POST['submit'])) {
    try {
        $shoppingCart = new ShoppingCart;
        $shoppingCart->addOrderedProducts($orderedGoodsKeys, $userId);
        $shoppingCart->showShoppingCart($userId);
    } catch (Exception $e) {
        echo($e->getMessage());
    }
}
