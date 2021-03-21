-- ограничить табл продавцами из лондона
SELECT *
FROM `orders`,
     `salespeople`
WHERE orders.SNUM = salespeople.SNUM
  AND salespeople.CITY = "London"

--Вывести данные о клиентах и их заказах

SELECT *
FROM `customers`,
     orders
WHERE customers.CNUM = orders.CNUM

--Клеменс

SELECT *
FROM `customers`,
     orders
WHERE customers.CNUM = orders.CNUM
  AND customers.CNAME = "Clemens"

-- Общ сумма заказов для кажого продовца

SELECT salespeople.SNAME, SUM(orders.AMT)
FROM `orders`,
     `salespeople`
WHERE orders.SNUM = salespeople.SNUM
GROUP BY salespeople.SNAME

-- Найти общую сумму заказов для каждого клиента

SELECT customers.CNAME, SUM(orders.AMT)
FROM `orders`,
     `customers`
WHERE orders.CNUM = customers.CNUM
GROUP BY customers.CNAME

-- Группировка

SELECT customers.CNAME, SUM(orders.AMT)
FROM `orders`,
     `customers`
WHERE orders.CNUM = customers.CNUM
GROUP BY customers.CNAME
ORDER BY customers.CNAME

-- Найти среднюю сумму заказов клиентов из каждого города

SELECT customers.CNAME,
       AVG(orders.AMT)
FROM `orders`,
     `customers`
WHERE orders.CNUM = customers.CNUM
GROUP BY customers.CNAME

--
SELECT customers.CITY,
       AVG(orders.AMT)
FROM `orders`,
     `customers`
WHERE orders.CNUM = customers.CNUM
GROUP BY customers.CITY
-----
SELECT customers.CITY,
       AVG(orders.AMT)
FROM `orders`,
     `customers`
WHERE orders.CNUM = customers.CNUM
GROUP BY customers.CITY
ORDER BY AVG(orders.AMT) DESC

--

SELECT *
FROM `customers`,
     `orders`,
     `salespeople`
WHERE customers.CNUM = orders.CNUM
  and customers.SNUM = salespeople.SNUM

-- Средний рейтинг покупателей для каждого продавца

SELECT salespeople.SNAME,
       AVG(customers.`RATING`)
FROM `customers`,
     `orders`,
     `salespeople`
WHERE customers.CNUM = orders.CNUM
  AND customers.SNUM = salespeople.SNUM
GROUP BY salespeople.SNAME

-- Количество заказов у каждого продавца

SELECT salespeople.SNAME,
       COUNT(orders.AMT)
FROM `orders`,
     `salespeople`
WHERE orders.SNUM = salespeople.SNUM
GROUP BY salespeople.SNAME

-- Найти продавцов у которых сумма заказов больше или равна средней сумме заказов из Лондона

SELECT SNAME,
       SUM(AMT)
FROM `orders`,
     `salespeople`
WHERE `orders`.`SNUM` = `salespeople`.`SNUM`
GROUP BY `salespeople`.`SNAME`
HAVING SUM(amt) >= (
    SELECT AVG(AMT)
    FROM `orders`,
         `salespeople`
    WHERE `orders`.`SNUM` = `salespeople`.`SNUM`
      AND `CITY` = "London"
    GROUP BY `CITY`
)

-- Найти общую сумму заказов на каждую дату

SELECT orders.ODATE,
       SUM(AMT)
FROM `orders`,
     `salespeople`
WHERE `orders`.`SNUM` = `salespeople`.`SNUM`
GROUP BY `orders`.`ODATE`

-- Найти доход каждого продавца

SELECT salespeople.SNAME,
       SUM(orders.AMT * salespeople.COMM)
FROM `orders`,
     `salespeople`
WHERE `orders`.`SNUM` = `salespeople`.`SNUM`
GROUP BY salespeople.SNAME
ORDER BY SUM(orders.AMT * salespeople.COMM) DESC

-- Подсчитать количество клиентов у каждого продавца

SELECT salespeople.SNAME,
       COUNT(customers.CNUM) AS `COUNT`
FROM `customers`,
     `orders`,
     `salespeople`
WHERE customers.CNUM = orders.CNUM
  AND customers.SNUM = salespeople.SNUM
GROUP BY salespeople.SNAME

-- Сколько дал заработать продавцам каждый клиент?

SELECT `orders`.CNUM,
       CNAME,
       SUM(AMT * `COMM`) AS "SUMM"
FROM `orders`,
     `salespeople`,
     `customers`
WHERE orders.CNUM = customers.CNUM
  AND orders.SNUM = salespeople.SNUM
GROUP BY `orders`.`CNum`,
         `CNAME`

-- Вывести список продавцов обслуживших заказ у клиентов с самым высоким рейтингом

SELECT DISTINCT `salespeople`.SNAME
FROM `orders`,
     `customers`,
     `salespeople`
WHERE orders.CNUM = customers.CNUM
  AND orders.SNUM = salespeople.SNUM
  AND rating = (
    SELECT MAX(`RATING`)
    FROM `customers`
)