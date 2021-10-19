<?php

require_once 'model.php';

class Products extends Model
{
    public function getAll(): array
    {
        $connection = (new Model)->getConnection();
        $data = $connection->query(
            'select id, product_name, product_price, product_quantity from products;'
        );
        if (!$data) {
            throw new Exception("Error. Lost connection with database (products).<br>");
        }
        $result = $data->fetchAll();

        if (empty($result)) {
            throw new Exception("There are no products for now.<br>");
        }

        return $result;
    }
}