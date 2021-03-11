INSERT INTO `ved` (`fio`, `zp`)
VALUES ('Степанов Степан Степанович', 9000);

INSERT INTO `ved` (`fio`, `zp`)
VALUES ('Акулов Иван Степанович', 5000);

INSERT INTO `ved` (`fio`, `zp`)
VALUES ('Герасимов Герасим Гераимович', 2000);

INSERT INTO `ved` (`fio`, `zp`)
VALUES ('Антонов Антон Антонович', 1500);

INSERT INTO `ved` (`fio`, `zp`)
VALUES ('Гургенов Гурген Гургенович', 100000);

UPDATE ved
SET zp=900
WHERE id = 2;

-- Всем у кого зп < 2000 р увеличить зп на 10%

UPDATE ved
SET zp=zp * 1.1
WHERE zp < 2000;

SELECT *
FROM `ved`
WHERE id = 7;

--склад 10% к зп

UPDATE vedomost
SET zp=zp * 1.1
WHERE otdel = 'склад';

SELECT *
FROM `vedomost`
WHERE 'fio' LIKE 'З%'

SELECT *
FROM `vedomost`
WHERE `fio` LIKE '%Петрович'

SELECT *
FROM `vedomost`
WHERE `fio` LIKE '%ов % %'

--Список людей с зп от 300 до 800 р

SELECT *
FROM `vedomost`
WHERE `zp` >= 300
  and `zp` <= 800

SELECT *
FROM `vedomost`
WHERE `zp` BETWEEN 300 and 800

-- Вывести работниокв с табельным номером 2, 4 и 5.

SELECT *
FROM `vedomost`
WHERE `nomer` = 2
   or `nomer` = 4
   or `nomer` = 5

SELECT *
FROM `vedomost`
WHERE `nomer` IN (2, 4, 5)

-- Вывести работников которые раб. на складе и бухгалтерии

SELECT *
FROM `vedomost`
WHERE `otdel` IN ('Склад', 'Бухгалтерия')

-- ЗП 100 и 400

SELECT *
FROM `vedomost`
WHERE `zp` IN (100, 400)

SELECT SUM(`zp`) AS 'ОБЩАЯ ЗАРПЛАТА'
FROM `vedomost`

SELECT
    SUM(`zp`) AS 'Общая ЗП',
    MIN(`zp`) AS 'Минимальная ЗП',
    MAX(`zp`) AS 'Максимальная ЗП',
    AVG(`zp`) AS 'Средняя ЗП',
    COUNT(`zp`) AS 'Кол-во ЗП'
FROM
    `vedomost`

SELECT
    COUNT(*) AS 'Кол-во ЗП'
FROM
    `vedomost`