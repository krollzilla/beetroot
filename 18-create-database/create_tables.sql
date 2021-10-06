CREATE TABLE products
(
    id               INT PRIMARY KEY AUTO_INCREMENT,
    product_name     VARCHAR(100)   NOT NULL,
    product_price    DECIMAL(10, 2) NOT NULL DEFAULT 0,
    product_quantity INT UNSIGNED            DEFAULT 0,
    category_id      INT            NOT NULL
);

CREATE TABLE users
(
    id       INT PRIMARY KEY AUTO_INCREMENT,
    name     VARCHAR(100) NOT NULL,
    email    VARCHAR(100) NOT NULL,
    password VARCHAR(50)  NOT NULL
);

CREATE TABLE product_categories
(
    id            INT PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(100) NOT NULL
);

CREATE TABLE shopping_carts
(
    id              INT PRIMARY KEY AUTO_INCREMENT,
    product_id      INT          NOT NULL,
    user_id         INT          NOT NULL,
    orders_quantity INT UNSIGNED NOT NULL DEFAULT 0,
    order_date      TIMESTAMP
);