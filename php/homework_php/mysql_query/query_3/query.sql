-- Средний размер комиссионных в каждом городе, кроме Нью-Йорка

SELECT `CITY`, AVG(`COMM`) AS `avg_comm`
FROM `salespeople`
WHERE `CITY` NOT IN ("New York")
GROUP BY `CITY`

-- Вывести заказы всех клиентов из Рима и Берлина

SELECT *
FROM `orders`
WHERE CNUM IN (SELECT CNUM
               FROM `customers`
               WHERE `CITY` IN ("Berlin", "Rome"))