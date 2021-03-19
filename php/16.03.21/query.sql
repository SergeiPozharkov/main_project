SELECT `fio`
FROM `vedomost`
WHERE `zp` = (
    SELECT MAX(`zp`)
    FROM `vedomost`
)
-- найти человека с самой маленькой ЗП
SELECT `fio`
FROM `vedomost`
WHERE `zp` = (
    SELECT min(`zp`)
    FROM `vedomost`
)

--найти всех у кого ЗП выше среднего

SELECT `fio`
FROM `vedomost`
WHERE `zp` > (
    SELECT AVG(`zp`)
    FROM `vedomost`
)

-- Считает колличество людей в каждом отделе

SELECT `otdel`, COUNT(*) AS `Количество людей в каждом отделе`
FROM vedomost
GROUP BY `otdel`

-- посчитать кол-во людей в бухгалтерии

SELECT `otdel`,
       COUNT(*) AS `Количество людей в каждом отделе`
FROM vedomost
WHERE `otdel` = 'бухгалтерия'
GROUP BY `otdel`

-- Выводит отделы в которых численность >= 2.

SELECT `otdel`,
       COUNT(*) AS `Количество людей в каждом отделе`
FROM vedomost
GROUP BY `otdel`
HAVING COUNT(*) >= 2

--Найти сред ЗП в каждом отделе

SELECT `otdel`,
       AVG(`zp`) AS `Средняя ЗП`
FROM vedomost
GROUP BY `otdel`

-- Найти мин ЗП и мах ЗП в каждом отделе

SELECT `otdel`   AS `Отдел`,
       MIN(`zp`) AS `Минимальная ЗП`,
       MAX(`zp`) AS `Максимальная ЗП`
FROM vedomost
GROUP BY `otdel`

-- Найти максимальную ЗП в отделах где работает больше 1 чел-ка

SELECT `otdel`   AS `Отдел`,
       MAX(`zp`) AS `Максималььная ЗП`
FROM vedomost
GROUP BY `otdel`
HAVING COUNT(*) > 1

-- Посчмтать сколько продавцов в каждом городе

SELECT `CITY`,
       COUNT(*) AS `Количество продавцов в каждом городе`
FROM salespeople
GROUP BY `CITY`

-- Посчмтать сколько клиентов в каждом городе

SELECT `CITY`   AS `Город`,
       COUNT(*) AS `Количество клиентов в каждом городе`
FROM customers
GROUP BY `CITY`

-- Вывести продавца у которого самые маленькие комиссионные

SELECT *
FROM `salespeople`
WHERE `COMM` = (SELECT MIN(`COMM`) FROM `salespeople`)

--Найти покупателя с самым высоким рейтингом

SELECT *
FROM customers
WHERE `RATING` = (SELECT MAX(`RATING`) FROM customers)

-- Найти клиентов у которых фамилия заканчивается на букву S

SELECT *
FROM `customers`
WHERE `CNAME` LIKE '%s'

--Вывести клиентов с номерами 2002     2006    2008

SELECT *
FROM `customers`
WHERE `CNUM` IN (2002, 2006, 2008)

-- Найти клиентов из городов Берлин Лондон Рим

SELECT *
FROM `customers`
WHERE `CITY` IN ('Berlin', 'London', 'Rome')

-- Найти клиентов с рейтонгом от 150 до 250

SELECT *
FROM `customers`
WHERE `RATING` BETWEEN 150 AND 250

-- Найти продовца который обслужил самый большей казаз

SELECT SNAME
FROM salespeople
WHERE SNUM = (
    SELECT `SNUM`
    FROM orders
    WHERE `AMT` = (
        SELECT MAX(`AMT`)
        FROM orders
    )
)

-- Найти все заказы клиента по имени Grass

SELECT *
FROM `orders`
WHERE CNUM = (
    SELECT CNUM
    FROM `customers`
    WHERE cname = "Grass"
)

