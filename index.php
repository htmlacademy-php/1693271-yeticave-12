<?php


$is_auth = rand(0, 1);

$user_name = 'Ильгиз'; // укажите здесь ваше имя
$img_path = 'img/'; // путь к рисункам. Для сокращения длины данных в массиве

// массивы данных
$categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];

$lots_list = [
    [
        'name' => '2014 Rossignol District Snowboard',
        'category_id' => 1,
        'price' => 10999,
        'img' => 'lot-1.jpg',
        'date_end' => '2021-07-13',
    ],
    [

        'name' => 'DC Ply Mens 2016/2017 Snowboard',

        'category_id' => 1,
        'price' => 159999,
        'img' => 'lot-2.jpg',
        'date_end' => '2021-08-17',
    ],
    [
        'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category_id' => 2,
        'price' => 8000,
        'img' => 'lot-3.jpg',
        'date_end' => '2021-07-21',
    ],
    [
        'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category_id' => 3,
        'price' => 10999,
        'img' => 'lot-4.jpg',
        'date_end' => '2021-09-30',
    ],
    [
        'name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category_id' => 4,
        'price' => 7500,
        'img' => 'lot-5.jpg',
        'date_end' => '2021-07-25',
    ],
    [
        'name' => 'Маска Oakley Canopy',
        'category_id' => 6,
        'price' => 5400,
        'img' => 'lot-6.jpg',
        'date_end' => '2021-08-19',
    ],

];

require_once('helpers.php');

// фильтруем входящие данные
$categories = array_map('esc',$categories);
foreach ($lots_list as &$lot) {
    $lot['name'] = esc($lot['name']);
    $lot['category_id'] = intval($lot['category_id']);
    $lot['price'] = intval($lot['price']);
    $lot['img'] = esc($lot['img']);
}
unset($lot);

// формируем вывод
$content = include_template('main.php', ['categories' => $categories, 'lots_list' => $lots_list, 'img_path' => $img_path]);

$layout = include_template('layout.php', ['is_auth' => $is_auth, 'pageName' => 'YetiCave. Главная', 'user_name' => $user_name, 'content' => $content, 'categories' => $categories]);

print ($layout);
