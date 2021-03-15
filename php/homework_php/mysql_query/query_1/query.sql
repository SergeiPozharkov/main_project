-- Сортирует товары по колонке цена и по убыванию. (DML)
select *
from products
order by price desc;

-- Выбирает товары типа мышь и монитор. (DML)
select *
from products
where type in ('mouse', 'monitor');

-- Выбирает первые 10 строк. (DML)
select *
from products limit 10;

-- Обновляет(заменяет) в колонке productname элемент Iphone на Iphone 11. (DML)
update products
set productname="Iphone 11"
where productname = "Iphone";

-- Переименовывает таблицу products в tovari. (DLL)
rename
table products to tovari;
