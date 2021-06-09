
    <main class="container">
        <section class="promo">
            <h2 class="promo__title">Нужен стафф для катки?</h2>
            <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
            <ul class="promo__list">
                <!--заполните этот список из массива категорий-->
                <?php foreach ($categories as $key => $item): ?>
                    <li class="promo__item promo__item--boards">
                        <a class="promo__link" href="pages/all-lots.html"><?=$item; ?></a>   <?php // Имя категории ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section class="lots">
            <div class="lots__header">
                <h2>Открытые лоты</h2>
            </div>
            <ul class="lots__list">
                <!--заполните этот список из массива с товарами-->
                <?php foreach ($lots_list as $key => $lot): ?>
                    <li class="lots__item lot">
                        <div class="lot__image">
                            <img src="<?=$img_path . $lot['img']; ?>" width="350" height="260" alt="">   <?php // Рисунок ?>
                        </div>
                        <div class="lot__info">
                            <span class="lot__category"><?=$categories[$lot['category_id']];?></span>
                            <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?=$lot['name'];?></a></h3>   <?php // Название товара ?>
                            <div class="lot__state">
                                <div class="lot__rate">
                                    <span class="lot__amount">Стартовая цена</span>
                                    <span class="lot__cost"><?=showPrice($lot['price']); ?></span>    <?php // цена ?>
                                </div>
                                <div class="lot__timer timer">
                                    12:23
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>
