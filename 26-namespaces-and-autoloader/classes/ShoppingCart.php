<?php

namespace Beetroot\Classes;

class ShoppingCart extends Model
{

    public function addOrderedProducts(array $products, int $userId): void
    {
        if (empty($products)) {
            echo('You ordered nothing new. <br>'); // без эксепшена, тк всё равно показываем уже добавленные до этого товары
        }
        $connection = (new Model)->getConnection();
        $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        foreach ($products as $product) {
            $data = $connection->prepare(
                "INSERT INTO shopping_carts(product_id, user_id, orders_quantity) VALUES (:product_id, :user_id, 1);"
            );
            $data->bindParam(':product_id', $product);
            $data->bindParam(':user_id', $userId);
            try {
                $data->execute();
            } catch (PDOException $Exception) {
                throw new Exception(
                    "Error. Lost connection with database (shopping carts) trying to add product '$product'.<br>"
                );
            }
            echo 'Product(s) successfully added to your shopping-cart.<br>';
        }
    }

    public function showShoppingCart(int $userId): void
    {
        $connection = (new Model)->getConnection();

        $data = $connection->prepare(
            'select products.product_name, products.product_price, sc.order_date
                        from products inner join shopping_carts sc on products.id = sc.product_id
                        where sc.user_id = ? order by sc.order_date desc;'
        );
        if (!$data) {
            throw new Exception("Error. Lost connection with database (products).<br>");
        }
        $data->execute([$userId]);
        $result = $data->fetchAll();

        if (empty($result)) {
            throw new Exception("There are no products in your shopping-cart for now.<br>");
        }
        echo "Products in your shopping-cart for now: <br>";

        foreach ($result as $product) {
            echo("— ".$product["order_date"]." - ".$product["product_name"].
                ", price: ".$product["product_price"]." <br>");

        }
    }
}