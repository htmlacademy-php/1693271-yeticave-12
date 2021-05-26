<?php
$is_auth = rand(0, 1);

$user_name = 'Ильгиз'; // укажите здесь ваше имя

             $category = array (1=>"Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное");
             
                   $category [] =[
                            'name' => '2014 Rossignol District Snowboard', 
                            'price' => '10999',
                            'image'=> 'lot-1.jpg',
                            'category_id' => 1,
                   ];

                    $category [] => [
                            'name' => 'Dc Ply Mens 2016/2017 Snowboard',
                            'price' => '159999',
                            'image'=> 'lot-2.jpg',
                            'category_id' => ,
                    ];

                    $category [] => [
                        [	'name' =>'Крепление Union Contace Pro 2015 года размер L/X',
                            'price' => '8000',
                            'image'=> 'lot-3.jpg',
                            'category_id' => ,
                    ];
                         
                    $category [] => [
                            'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
                            'price' => '10999',
                            'image'=> 'lot-4.jpg',
                            'category_id' => ,
                    ];

                    $category [] => [
                            'name' => 'Куртка для сноуборда DC Multiny Charocal',
                            'price' => '7500',
                            'image'=> 'lot-5.jpg',
                            'category_id' => ,
                    ];
                        
                    $category [] => [
                         	'name' => 'Маска Oakley Canopy',
                            'price' => '5400',
                            'image'=> 'lot-6.jpg',
                            'category_id' => ,
                    ];
?>
                         
<header class="main-header">
    <div class="main-header__container container">
        <h1 class="visually-hidden">YetiCave</h1>
        <a class="main-header__logo">
            <img src="../img/logo.svg" width="160" height="39" alt="Логотип компании YetiCave">
        </a>
        <form class="main-header__search" method="get" action="https://echo.htmlacademy.ru" autocomplete="off">
            <input type="search" name="search" placeholder="Поиск лота">
            <input class="main-header__search-btn" type="submit" name="find" value="Найти">
        </form>
        <a class="main-header__add-lot button" href="pages/add-lot.html">Добавить лот</a>
      
        <nav class="user-menu">

        <!-- здесь должен быть PHP код для показа меню и данных пользователя -->
                <?php if ($is_auth == 1): ?>
                    <div class="user-menu_logged">
                        <p> <?php echo $user_name ?> </p>
                        <a class="user-menu_bets" href="pages/my-best.html"> Мои ставки </a>
                        <a class="user-menu_logout" href="#"> Выход </a>
                    </div>
                <?php else: ?>
                    <ul class="user-menu_list">
                        <li class="user-menu_item">
                        <a herf="#"> Регистрация </a>
                        </li>
                        <li class="user-menu_item"> 
                        <a herf="#"> Вход </a>
                        </li>
                    </ul>
                <?php endif; ?>
        </nav>

    </div>
</header



            <?php foreach($products as $product): ?>
                <?php echo $product["name"] ?>
                <?php echo $product["product"]["price"]?>
                <?php echo $product["product"]["image"]?>
                <?php endforeach; 
            ?>

           
            <?php foreach($category as $row) {
                echo '<p>' . $row ['name'] . '|' .$row ['category_id'] '|' . .$row ['price'] . '|' .$row ['image']; 
            }
            ?>
            
            <li class="promo__item promo__item--boards">
                <a class="promo__link" href="pages/all-lots.html">Имя категории</a>
            </li>
       
            <?php
                var_dump(round($int, 3));
                number_format ( float $<="1000" , int $decimals = 3 , string|null $decimal_separator = "." , string|null $thousands_separator = "," ) : string
                number_format ( float $>="1000" , int $decimals = 0 , string|null $decimal_separator = "." , string|null $thousands_separator = "," ) : string
                setlocale(LC_MONETARY, 'ru_RU');
            ?>
                            
            <?php foreach($categories as $value): ?>
            <il> <?php echo $categories['$value']?> </il>
            <?php endforeach; ?>

            <?php 
                include_template ("main.php" , "layout.php"); 
                layout('html' , '$user_name' , 'tilte');
            ?>