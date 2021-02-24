<?php
$is_auth = rand(0, 1);

$user_name = 'Ильгиз'; 
?>

<?php
             $category = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];
             [
                   ["$category" => 0,
                        "product"=>
                        [[   "name" => "2014 Rossignol District Snowboard", 
                             "price" => "10999",
                             "image"=> '<img src="img/lot-1.jpg">'],

                    ["$category" => 0,
                        [[   "name" => "Dc Ply Mens 2016/2017 Snowboard",
                             "price" => "159999",
                             "image"=> '<img scr="img/lot-2.jpg">',]
                        ]],

                    ["$category" => 1,
                        "product" => 
                        [	"name" => "Крепление Union Contace Pro 2015 года размер L/XL",
                            "price" => "8000",
                            "image"=> '<img scr="img/lot-3.jpg">',
                        ]],

                    ["$category" => 2,
                        "product" =>
                         [ 	"name" => "Ботинки для сноуборда DC Mutiny Charocal",
                            "price" => "10999",
                            "image"=> '<img scr="img/lot-4.jpg">',
                        ]],

                    ["$category" => 3,
                        "product" =>
                        [   "name" => "Куртка для сноуборда DC Multiny Charocal",
                            "price" => "7500",
                            "image"=> '<img scr="img/lot-5.jpg">',
                        ]], 
                        
                    ["$category" => 4,
                        "product" =>
                        [ 	"name" => "Маска Oakley Canopy",
                            "price" => "5400",
                            "image"=> '<img scr="img/lot-6.jpg">',
                        ]],
                    ];
?>

<?php foreach($products as $product): ?>
    <?php echo $product["name"] ?>
    <?php echo $product["product"]["price"]?>
    <?php echo $product["product"]["image"]?>
    <?php endforeach; 
?>

 <?php if($is_auth == 1) {
            echo '
                    <div class="user-menu__logged">
                        <p>#Ilgiz#</p>
                        <a class="user-menu__bets" href="pages/my-bets.html">Мои ставки</a>
                        <a class="user-menu__logout" href="#">Выход</a>
                    </div>
                    ';
                     } elseif($is_auth == 0) {
                         echo '
                    <ul class="user-menu__list">
                        <li class="user-menu__item">
                             <a href="#">Регистрация</a>
                        </li>
                        <li class="user-menu__item">
                            <a href="#">Вход</a>
                         </li>
                  </ul>';}
?>
           
            <?php foreach($categories as $value): ?>
                <il> <?php echo $categories['$value']?> </il>
                <?php endforeach; ?>
                //конец кода
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