<!DOCTYPE html>
<html>
<head>
    <title>Товары</title>
    <style>
        .row {
            margin: 15px 60px;
        }
    </style>
</head>
<body>
<div id="app">
    <form action="save-product.php" method="POST">
        <div class="row">
            <?php
            require 'config.php';
            use Beetroot\Classes\Products;
            try {
                $products = Products::getAll();
                foreach ($products as $product) {
                    echo '<input type="checkbox" name="'.$product["id"].'">'.$product["product_name"].
                            ', price:'.$product["product_price"].', amount:'.$product["product_quantity"].'<br>';
                    }
                    ?>
        </div>
        <div class="row">
            <input type="submit" name="submit" value="Order">
        </div>

        <?php
                } catch (Exception $e) {
            echo($e->getMessage());
            }
        ?>
    </form>
</div>
</body>
</html>
