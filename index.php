<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <link rel="stylesheet" href="/styles/dest/index.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"> -->
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
                    <a class="navigation__link" href="#">Женщинам</a>
                    <a class="navigation__link" href="/pages/catalog.php">Мужчинам</a>
                    <a class="navigation__link" href="#">Детям</a>
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
            <div class="block-title block-title_margin-home">
                <h1 class="block-title__title block-title__title_home">Новые поступления весны<h1>
                <p class="block-title__text block-title__text-home_margin">Мы подготовили для Вас лучшие новинки сезона</p>
                <a href="#" class="title-button title-button_margin">Посмотреть новинки</a>
            </div>
            <section class="home">
                <div class="home-intro home-intro_margin">
                    <div class="home-column-25">
                        <div class="home-cell home-cell-h60" style="background: url('/images/1.jpg') center center / cover">
                            <h2 class="cell-title">Джинсовые куртки</h2>
                            <p class="cell-text">New arrival</p>
                        </div>
                        <div class="home-cell home-cell-h30" style="background: url('/images/5.jpg') center center / cover"></div>
                    </div>
                    <div class="home-column-50">
                        <div class="home-cell cell-info home-cell-center">
                            <div class="cell-info-pic"><i class="fas fa-exclamation-circle icon-danger"></i></div>
                            <p class="cell-info-text">Каждый сезон мы подготавливаем для Вас исключительно лучшую модную одежду. Следите за нашими новинками</p>
                        </div>
                        <div class="home-cell home-cell-center" style="background: url('/images/3.jpg') center center / cover"></div>
                        <div class="home-cell home-cell-center" style="background: url('/images/2.jpg') center center / cover">
                            <h2 class="cell-title">Джинсы</h2>
                            <p class="cell-text">От 3200 руб.</p>
                        </div>
                        <div class="home-cell cell-info home-cell-center">
                            <div class="cell-info-pic"><i class="fas fa-exclamation-circle icon-danger"></i></div>
                            <p class="cell-info-text">Самые низкие цены в Москве. Нашли дешевле? Вернем разницу</p>
                        </div>
                        <div class="home-cell cell-category home-cell-center">
                            <i class="fas fa-arrow-left icon-category"></i>
                            <h2 class="cell-title">Аксессуары</h2>
                        </div>
                        <div class="home-cell cell-bg home-cell-center" style="background: url('/images/6.jpg') center center / cover">
                            <div class="shadow"></div>
                            <h2 class="cell-title">Спортивная одежда</h2>
                            <p class="cell-text">От 590 руб.</p>
                        </div>
                    </div>
                    <div class="home-column-25">
                        <div class="home-cell cell-category home-cell-h30">
                            <i class="fas fa-arrow-left icon-category"></i>
                            <h2 class="cell-title">Элегантная обувь</h2>
                            <p class="cell-text">Ботинки, кроссовки</p>
                        </div>
                        <div class="home-cell home-cell-h60" style="background: url('/images/4.jpg') center center / cover">
                            <h2 class="cell-title">Десткая одежда</h2>
                            <p class="cell-text">New arrival</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="subscribe-home subscribe-home_margin">
                <div class="block-title">
                    <h2 class="block-title__title">Будь всегда в курсе выгодных предложений</h2>
                    <h2 class="block-title__text">Подписывайся и следи за новинками и выгодными предложениями.</h2>
                </div>
                <form action="" class="subscribe-form subscribe-form_margin">
                    <input class="subscribe-input" type="email" placeholder="E-mail">
                    <button class="subscribe-button">Записаться</button>
                </form>
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
</body>
</html>