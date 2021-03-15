-- Выбирает товары производителей Samsung и Huawei
SELECT *
FROM `new_products`
WHERE ` manufacturer` IN ('Samsung', 'Huawei');

-- Отсортировывает товары по цене в порядке возростания (ASC по умолчанию)
SELECT *
FROM `new_products`
ORDER BY `price`;

-- Выбирает (считает) среднюю цену, сумму цен, минимальную и максимальную цены
SELECT AVG(`price`) AS `average_price`,
       SUM(`price`) AS `summ_price`,
       MIN(`price`) AS `min_price`,
       MAX(`price`) AS `max_price`
FROM `new_products`;

-- Выбирает (считает) товары сгруппированные по производителям
SELECT ` manufacturer`, COUNT(*) AS `product_count`
FROM `new_products`
GROUP BY ` manufacturer`;

-- Выбирает уникальные(не повторяющиеся) типы товаров
SELECT DISTINCT `type`
FROM `new_products`;

-- Выбирает товары с ценой > 65000
SELECT *
FROM `new_products`
WHERE `price` > 65000;

-- Удаляет из таблицы товаров, 10-й товар.
DELETE
FROM `new_products`
WHERE `product_id` = 10;