INSERT INTO category
VALUES ('1', boards);
VALUES ('2', attachment);
VALUES ('3',boots);
VALUES ('4', clothing);
VALUES ('5', tools);
VALUES ('6', other);

 INSERT INTO lot (id, date_creation, name, description, image, start_price, date_end, category_name)
 VALUES ('1', 01.04.2021, 2014 Rossignol District Snowboard, 2014 Rossignol District Snowboard, lot-1.jpg, 10999, 14.04.2021, boards);
 VALUES ('2', 01.04.2021, DC Ply Mens 2016/2017 Snowboard, DC Ply Mens 2016/2017 Snowboard, lot-2.jpg, 15999, 14.04.2021,boards);
 VALUES ('3', 01.04.2021, Union Contact Pro 2015 года размер L/XL, Крепления Union Contact Pro 2015 года размер L/XL, lot-3.jpg, 8000, 14.04.2021,attachment);
 VALUES ('4', 01.04.2021, DC Mutiny Charocal, Ботинки для сноуборда DC Mutiny Charocalбб lot-4.jpg., 10999, 14.04.2021,boots);
 VALUES ('5', 01.04.2021, DC Mutiny Charocal, Куртка для сноуборда DC Mutiny Charocal, lot-5.jpg, 10999, 14.04.2021,clothing);
 VALUES ('6', 01.04.2021, Oakley Canopy, Маска Oakley Canopy, lot-6jpg., 5500, 14.04.2021,other);

 INSERT INTO user
 VALUES ('1', 29.03.2020, user@mail.ru, Rijik, *********, 89123456723);
 VALUES ('2', 31.12.2020, user1@gmail.com Red, *********, 89638527411);

 //команды//
 SELECT category; //показать категорииж
 SELECT lot; // показать лоты(товары);
 SELECT user_id; // показать пользователя по n-id(n- это id пользователя);
 SELECT rate; //показать ставки;
 SELECT * FROM lot WHERE lot IN 'start_price', 'image', 'name', 'categoiry_name', 'prise';// показать все товары в таблице лот с даными (стартовая цена,изображение,название,категория,текущая цена);
 SELECT lot WHERE 'id', 'category';// показать тщвары по id и категории;
 SELECT SHOW TABLES; // показать доступные таблицы;
 UPDATE lot  SET name WHERE id; //обновить название лота по его id;
 SELECT rate WHERE id IN date; // показать ставки по его дате;



