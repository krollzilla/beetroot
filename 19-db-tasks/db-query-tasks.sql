/*выведите общее количество всех товаров в таблицу товаров*/
SELECT COUNT(*) products_cnt FROM products;


/*выведите товар с максимальным количеством единиц*/
SELECT * FROM products
WHERE product_quantity = (SELECT MAX(product_quantity) FROM products);

SELECT * FROM products
ORDER BY product_quantity DESC
LIMIT    1;


/*обновите товар с минимальным количеством единиц, увеличив количество в 2 раза*/
UPDATE products SET product_quantity = product_quantity * 2
ORDER BY product_quantity ASC
LIMIT    1;

UPDATE products,
    (SELECT id FROM products
     WHERE product_quantity IN
           (SELECT MIN(product_quantity) FROM products))
        AS other_products
SET products.product_quantity = products.product_quantity * 2
WHERE products.id = other_products.id;


/*выведите данные о всех пользователях с товаром в корзине и их товар, который добавлен в корзину*/
SELECT users.*, products.* 
FROM users, products, shopping_carts carts
WHERE users.id = carts.user_id
AND products.id = carts.product_id;


/*отсортируйте категории в порядке убывания количества единиц уникального товара в ней*/
SELECT /*COUNT(DISTINCT p.product_name) products_cnt,*/ pc.category_name 
FROM products p, product_categories pc
WHERE p.category_id=pc.id
GROUP BY p.category_id
ORDER BY COUNT(DISTINCT p.product_name) DESC;