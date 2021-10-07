INSERT INTO product_categories (category_name) VALUES ('Furniture');
INSERT INTO product_categories (category_name) VALUES ('Clothes');
INSERT INTO product_categories (category_name) VALUES ('Tableware');
INSERT INTO product_categories (category_name) VALUES ('Stationery');
INSERT INTO product_categories (category_name) VALUES ('Books');


INSERT INTO products (product_name, product_price, product_quantity, category_id) VALUES ('Chair', 120, 200, 1); 
INSERT INTO products (product_name, product_price, product_quantity, category_id) VALUES ('Table', 1200, 100, 1);
INSERT INTO products (product_name, product_price, product_quantity, category_id) VALUES ('Cupboard', 230, 200, 1);
INSERT INTO products (product_name, product_price, product_quantity, category_id) VALUES ('Dresser', 500, 90, 1);
INSERT INTO products (product_name, product_price, product_quantity, category_id) VALUES ('Armchair', 200, 600, 1);
INSERT INTO products (product_name, product_price, product_quantity, category_id) VALUES ('Recliner', 320, 11, 1);
INSERT INTO products (product_name, product_price, product_quantity, category_id) VALUES ('Couch', 2020, 100, 1);
INSERT INTO products (product_name, product_price, product_quantity, category_id) VALUES ('Dress', 200, 210, 2); 
INSERT INTO products (product_name, product_price, product_quantity, category_id) VALUES ('T-shirt', 90, 1100, 2);
INSERT INTO products (product_name, product_price, product_quantity, category_id) VALUES ('Pants', 40, 1200, 2);
INSERT INTO products (product_name, product_price, product_quantity, category_id) VALUES ('Coat', 550, 120, 2);
INSERT INTO products (product_name, product_price, product_quantity, category_id) VALUES ('Cup', 50, 900, 3);
INSERT INTO products (product_name, product_price, product_quantity, category_id) VALUES ('Plate', 70, 101, 3);
INSERT INTO products (product_name, product_price, product_quantity, category_id) VALUES ('Spoon', 15, 1000, 3);
INSERT INTO products (product_name, product_price, product_quantity, category_id) VALUES ('Pencil', 2, 1000, 4);
INSERT INTO products (product_name, product_price, product_quantity, category_id) VALUES ('Pen', 2, 1000, 4);


INSERT INTO users (name, email, password) VALUES ('Sasha', 'sasha@test.ua', '1112');
INSERT INTO users (name, email, password) VALUES ('Pasha', 'pasha@test.ua', '1113');
INSERT INTO users (name, email, password) VALUES ('Masha', 'masha@test.ua', '1114');
INSERT INTO users (name, email, password) VALUES ('Dasha', 'dasha@test.ua', '1115');
INSERT INTO users (name, email, password) VALUES ('Natasha', 'natasha@test.ua', '1116');
INSERT INTO users (name, email, password) VALUES ('Roma', 'roma@test.ua', '1117');
INSERT INTO users (name, email, password) VALUES ('Dima', 'dima@test.ua', '1118');
INSERT INTO users (name, email, password) VALUES ('Oleg', 'oleg@test.ua', '1119');
INSERT INTO users (name, email, password) VALUES ('Vitalik', 'vitalik@test.ua', '1110');
INSERT INTO users (name, email, password) VALUES ('Andrei', 'andrei@test.ua', '1111');
INSERT INTO users (name, email, password) VALUES ('Kirill', 'kirill@test.ua', '1121');
INSERT INTO users (name, email, password) VALUES ('Anton', 'anton@test.ua', '1131');
INSERT INTO users (name, email, password) VALUES ('Nikita', 'nikita@test.ua', '1141');


INSERT INTO shopping_carts (product_id, user_id, orders_quantity, order_date) VALUES (3, 1, 2, '2021-01-19 03:14:07');
INSERT INTO shopping_carts (product_id, user_id, orders_quantity, order_date) VALUES (13, 1, 2, '2021-01-19 05:14:02');
INSERT INTO shopping_carts (product_id, user_id, orders_quantity, order_date) VALUES (12, 2, 1, '2021-01-19 11:17:09');
INSERT INTO shopping_carts (product_id, user_id, orders_quantity, order_date) VALUES (11, 3, 1, '2021-01-19 09:14:27');
INSERT INTO shopping_carts (product_id, user_id, orders_quantity, order_date) VALUES (11, 4, 1, '2021-01-19 03:14:01');
INSERT INTO shopping_carts (product_id, user_id, orders_quantity, order_date) VALUES (12, 5, 3, '2021-01-19 05:16:08');
INSERT INTO shopping_carts (product_id, user_id, orders_quantity, order_date) VALUES (10, 5, 3, '2021-01-19 07:14:11');
INSERT INTO shopping_carts (product_id, user_id, orders_quantity, order_date) VALUES (5, 6, 1, '2021-01-19 03:14:09');
INSERT INTO shopping_carts (product_id, user_id, orders_quantity, order_date) VALUES (5, 7, 1, '2021-01-19 03:14:05');
INSERT INTO shopping_carts (product_id, user_id, orders_quantity, order_date) VALUES (8, 8, 1, '2021-01-19 03:14:17');
INSERT INTO shopping_carts (product_id, user_id, orders_quantity, order_date) VALUES (9, 9, 1, '2021-01-19 03:14:22');
INSERT INTO shopping_carts (product_id, user_id, orders_quantity, order_date) VALUES (1, 10, 1, '2021-01-19 03:14:23');
INSERT INTO shopping_carts (product_id, user_id, orders_quantity, order_date) VALUES (6, 11, 1, '2021-01-19 03:14:46');
INSERT INTO shopping_carts (product_id, user_id, orders_quantity, order_date) VALUES (8, 12, 1, '2021-01-19 03:14:56');
INSERT INTO shopping_carts (product_id, user_id, orders_quantity, order_date) VALUES (9, 13, 1, '2021-01-19 03:14:11');
INSERT INTO shopping_carts (product_id, user_id, orders_quantity, order_date) VALUES (1, 13, 1, '2021-01-19 07:16:07');
INSERT INTO shopping_carts (product_id, user_id, orders_quantity, order_date) VALUES (6, 10, 1, '2021-01-19 05:09:07');
