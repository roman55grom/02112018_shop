<?php
    // Поиск основных категорий
    include($_SERVER['DOCUMENT_ROOT'] . '/config/config.php');
    $query = "SELECT * FROM `categories` WHERE `parent_id` = 0";
    $cats = mysqli_query($db, $query);
    while($parent = mysqli_fetch_assoc($cats)) {
        $page_data['parent_cats'][] = $parent;
    }

    $find_cat = (empty($_GET)) ? $find_cat = 1 : $find_cat = $_GET['cat'];

    // Поиск подкатегорий
    $query = "SELECT * FROM `categories` WHERE `parent_id` = {$find_cat}";
    $cats = mysqli_query($db, $query);
    while($parent = mysqli_fetch_assoc($cats)) {
        $page_data['cats'][] = $parent;
    }
    // print_r($page_data);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/dest/catalog.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"> -->
    <title>Shop | Catalog</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__left">
                <div class="logo logo_margin-right"></div>
                <div class="navigation-burger">
                    <span class="navigation-burger__stick"></span>
                    <span class="navigation-burger__stick"></span>
                    <span class="navigation-burger__stick"></span>
                </div>
                <nav class="navigation">
                    <?php foreach($page_data['parent_cats'] as $key => $value): ?>
                    <a class="navigation__link" href="catalog.php?cat=<?= $value['id'] ?>"><?= $value['name'] ?></a>
                    <?php endforeach; ?>
                    <a class="navigation__link" href="#">Новинки</a>
                    <a class="navigation__link" href="#">О нас</a>
                </nav>
            </div>
            <div class="header__right">
                <div class="login login_margin-right">
                    <div class="login__pic"></div>
                    <div class="login__text">
                        Привет, Алексей (<span class="inside-text inside-text_orange">выйти</span>)
                    </div>
                </div>
                <div class="basket">
                    <div class="basket__pic"></div>
                    <div class="basket__text">
                        Корзина(5)
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="breadcrumb">
                Главная <span class="breadcrumb_margin">/</span> Мужчинам
            </div>
            <section class="catalog-wrapper">
                <div class="block-title block-title_margin">
                    <h1 class="block-title__title">Мужчинам</h1>
                    <p class="block-title__text block-title__text_margin">Все товары</p>
                </div>
                <form class="sorting-form sorting-form_margin">
                    <select class="sorting-form__dropdown sorting-form__dropdown_margin" id="catSelect">
                        <option class="dropdown__item" hidden>Категория</option>
                        <?php foreach($page_data['cats'] as $key => $value): ?>
                        <option class="dropdown__item" value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <select class="sorting-form__dropdown sorting-form__dropdown_margin">
                        <option class="dropdown__item" hidden>Размер</option>
                        <option class="dropdown__item">46 - S</option>
                        <option class="dropdown__item">48 - M</option>
                        <option class="dropdown__item">50 - L</option>
                        <option class="dropdown__item">52 - XL</option>
                    </select>
                    <select class="sorting-form__dropdown sorting-form__dropdown_margin">
                        <option class="dropdown__item" hidden>Стоимость</option>
                        <option class="dropdown__item">0-1000 руб.</option>
                        <option class="dropdown__item">1000-3000 руб.</option>
                        <option class="dropdown__item">3000-6000 руб.</option>
                        <option class="dropdown__item">6000-20000 руб.</option>
                    </select>
                </form>
                <div class="product">
                    <svg class="preloader" width="200px"  height="200px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-disk" style="background: none;"><g transform="translate(50,50)"><g ng-attr-transform="scale({{config.scale}})" transform="scale(0.7)"><circle cx="0" cy="0" r="50" ng-attr-fill="{{config.c1}}" fill="#111111"></circle><circle cx="0" ng-attr-cy="{{config.cy}}" ng-attr-r="{{config.r}}" ng-attr-fill="{{config.c2}}" cy="-28" r="15" fill="#ffffff" transform="rotate(69.8964)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 0 0;360 0 0" keyTimes="0;1" dur="0.6s" begin="0s" repeatCount="indefinite"></animateTransform></circle></g></g></svg>
                </div>
                <div class="pages-product"></div>
            </section>
        </main>
        <footer class="footer footer_margin">
            <div class="collections">
                <h3 class="collections__title">Колекции</h3>
                <a class="collections__link">Женщинам (1725)</a>
                <a class="collections__link">Мужчинам (635)</a>
                <a class="collections__link">Детям (2514)</a>
                <a class="collections__link">Новинки (76)</a>
            </div>
            <div class="shop">
                <h3 class="shop__title">Магазин</h3>
                <a class="shop__link">О нас</a>
                <a class="shop__link">Доставка</a>
                <a class="shop__link">Работай с нами</a>
                <a class="shop__link">Контакты</a>
            </div>
            <div class="social social_margin">
                <h3 class="social__title">Мы в социальных сетях</h3>
                <p class="social__text">Сайт разработан в inordic.ru</p>
                <p class="social__text">2018 © Все права защищены</p>
                <div class="social__links">
                    <a class="social__link social__link_margin" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="social__link social__link_margin" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="social__link social__link_margin" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </footer>
    </div>
    <script src="/js/navigation.js"></script>
    <script src="/js/catalog.js"></script>
</body>
</html>