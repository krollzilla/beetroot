<!DOCTYPE html>
<html>
<head>
    <title>Ordering products</title>
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
            require_once 'reader.php';
            require_once 'config.php';
            try {
                $products = readJson(FILENAME);
                foreach ($products as $product) {
                    echo '<input type="checkbox" name="'.$product["name"].'">'.$product["name"].
                            ', price:'.$product["price"].', amount:'.$product["amount"].'<br>';
                }
            } catch (Exception $e) {
                echo($e->getMessage());
            }
            ?>
        </div>
        <div class="row">
            <input type="submit" name="submit" value="Order">
        </div>
    </form>
</div>
</body>
</html>
