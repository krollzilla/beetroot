/* sql-ex.ru - 7 */

SELECT DISTINCT a.model, b.price
FROM product a
INNER JOIN
(SELECT model, price
FROM pc
UNION ALL 
SELECT model, price
FROM laptop
UNION ALL 
SELECT model, price
FROM printer) b 
ON a.model=b.model
WHERE a.maker='B';
