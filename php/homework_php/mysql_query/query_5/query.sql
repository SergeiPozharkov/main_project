-- Выбирает всех заказчиков чьи имена попали в определенный алфавитный диапазон:

SELECT *
FROM Customers
WHERE cname BETWEEN 'H' AND 'M';

-- Воспроизводит все комбинации имени продавца и имени заказчика так, что первый предшествует последнему в алфавитном порядке, а последний имеет оценку меньше чем 200.

SELECT sname,
       cname
FROM Salespeople,
     Customers
WHERE sname < cname
  AND rating < 200
