-- Найти продавцов, которые обслуживали заказы 10/06/1990

SELECT salespeople.SNAME,
       `orders`.`ODATE`
FROM `salespeople`,
     `orders`
WHERE salespeople.SNUM = orders.SNUM
  AND `orders`.`ODATE` IN ("1990-06-10")

-- Подсчитать количество продавцов, которые работали с клиентами с самым низким рейтингом

SELECT `salespeople`.SNAME AS "SNAME",
       COUNT(`salespeople`.SNAME) AS "COUNT SALESPEOPLE"
FROM `orders`,
     `customers`,
     `salespeople`
WHERE orders.CNUM = customers.CNUM
  AND orders.SNUM = salespeople.SNUM
  AND rating = (
    SELECT MIN(`RATING`)
    FROM `customers`
)
GROUP BY `salespeople`.`SNAME`

-- Найти города, в которых больше двух клиентов

SELECT `CITY`,
       COUNT(*) AS "COUNT CUSTOMERS"
FROM `customers`
GROUP BY `CITY`
HAVING (COUNT(*) >= 2)

-- Найти города, сумма заказов из которых больше, чем средняя сумма заказов за 10/03/1990

SELECT `customers`.`CITY`,
       SUM(AMT) AS "SUMM"
FROM `orders`,
     `customers`
WHERE `orders`.`CNUM` = `customers`.`CNUM`
GROUP BY `customers`.`CITY`
HAVING SUM(amt) > (
    SELECT AVG(`orders`.`AMT`) AS "AVG"
    FROM `customers`,
         `orders`,
         `salespeople`
    WHERE `customers`.`CNUM` = `orders`.`CNUM`
      AND `salespeople`.`SNUM` = `orders`.`SNUM`
      AND `orders`.`ODATE` IN ("1990-03-10")
    GROUP BY `ODATE`
)