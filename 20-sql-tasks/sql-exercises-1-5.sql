/* 1 */
SELECT model, speed, hd
FROM PC
WHERE price<500;

/* 2 */
SELECT DISTINCT maker
FROM product
WHERE TYPE='Printer';

/* 3 */
SELECT model, ram, screen
FROM laptop
WHERE price>1000;

/* 4 */
SELECT *
FROM printer
WHERE color='y';

/* 5 */
SELECT model, speed, hd
FROM pc
WHERE cd in ('12x', '24x')
AND price<600;