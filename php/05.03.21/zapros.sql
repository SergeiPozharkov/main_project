SELECT * FROM `vedomost` WHERE zp>200 and zp<123123

-- Найти тех кто в бухгалтерии получает зп > 300р

SELECT * FROM `vedomost` WHERE otdel = 'бухгалтерия' and zp>300

-- Найти всех работников склада и бухгалотерии

SELECT * FROM `vedomost` WHERE otdel = 'бухгалтерия' or otdel = 'склад'

-- Зп > 500 и не в бухгалтери работает 

SELECT * FROM `vedomost` WHERE zp>500 and not otdel = 'бухгалтерия'

-- Отсортировать по размеру ЗП
SELECT * 
FROM `vedomost`
ORDER BY zp

-- Отсортировать по размеру ЗП в обратном порядке
SELECT * 
FROM `vedomost`
ORDER BY zp DESC

-- Вывести список работников отсортированый по алфавиту
SELECT * 
FROM `vedomost`
ORDER BY fio 

-- Отсортировать таблицу по отделам и ЗП
SELECT * 
FROM `vedomost`
ORDER BY fio,zp 

-- Отсортировать таблицу по отделам в прямом направлении и по фио работников в обратном направлении
SELECT * 
FROM `vedomost`
ORDER BY otdel,fio DESC

-- Переименовать поле 
SELECT `fio` as 'name',`zp` 
FROM `vedomost` 
-- Столбех - поле или атрибут, строка - запись или кортеж

-- Все поля таблицы должны называтьсы по русски 
SELECT `fio` as 'фио',`zp` as 'зп', 'otdel' as 'отдел', 'number' as 'номер'
FROM `vedomost`

-- ЗП в долларах
SELECT `fio`,`zp`/2.6 as 'usd'
FROM `vedomost`

-- Округление 
SELECT `fio`,round(`zp`/2.6,2) as 'usd'
FROM `vedomost`

-- Вывести список работников бухгалтерии и их ЗП в  рос. руб.
SELECT `fio`,round(`zp`*28,2) as 'rub'
FROM `vedomost`
WHERE otdel = 'бухгалтерия' 

-- Вывести список работников склади и их зп в бел руб в дол. и в евро

SELECT `fio`,`zp` as 'bel rub', round(`zp`*28,2) as 'rub', round(`zp`/2.6,2) as 'usd', round(`zp`/3.2,2) as 'eur'
FROM `vedomost`
WHERE otdel = 'склад' 
