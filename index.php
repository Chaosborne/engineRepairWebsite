<!DOCTYPE html>
<html lang="ru">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="favicon.png">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/media.css">
        <!-- sup -->
        <title>Ремонт двигателей в Казани - актуальные цены | Мотор-Доктор</title>
        <?php 
            $pos = strpos($_SERVER['REQUEST_URI'], '?');
            $url_full = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
            if ($pos == 1) echo '<link rel="canonical" href="'. $url_full .'"/>'; 
        ?>        
</head>

<body>
    <header id="scroll-top" class="header">
        <!-- burger  -->
        <ul class="header__menu-list--burger">
            <img class="burger-btn--close burger-closer" src="img/burger-close.svg" alt="">
            <li class="header__menu-list-item burger-closer"><a class="header__menu-link" href="#we-offer">Наши услуги</a></li>
            <li class="header__menu-list-item burger-closer"><a class="header__menu-link" href="#price-list">Цены</a></li>
            <li class="header__menu-list-item burger-closer"><a class="header__menu-link" href="#contacts">Контакты</a></li>
        </ul>
        <div class="burger-overlay"></div>
        <!-- /burger  -->
        <div class="header__menu">
            <div class="container menu-container">

                <div class="top__menu-items">
                    <ul class="header__menu-list header__menu-list--left">
                        <li class="header__menu-list-item"><a class="header__menu-link" href="#we-offer">Наши услуги</a></li>
                        <li class="header__menu-list-item"><a class="header__menu-link" href="#price-list">Цены</a></li>
                        <li class="header__menu-list-item"><a class="header__menu-link" href="#contacts">Контакты</a></li>
                    </ul>
                    <img class="burger-btn" src="img/burger.svg" alt="">
                    <ul class="header__menu-list">
                        <li class="header__menu-list-item header-menu__phone"><a href="tel:+79872900644">+7 (987) 290-06-44</a></li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="container header__container">
            <a id="top-scroller" class="hidden" href="#scroll-top">
                <img src="img/top-scroller.svg" alt="">
            </a>
            <div class="header__content">
                <h1 class="header__offer"><span class="yellow">Ремонт двигателей</span><br>с гарантией</h1>
                <div class="header__description">Дизельные, бензиновые, для грузовых и легковых автомобилей</div>
                <button class="order__btn show-modal-btn">Заказать!</button>
                <img src="img/header_engine.png" alt="" class="header__img">
            </div>
        </div>

        <!-- modal -->
            <div class="modal-window hidden">
                <button class="close-modal">&times;</button>
                <form class="feedback__form feedback__form--modal" action="php/feedback.php" method="post">
                    <h4 class="form--name">Имя</h4>
                    <input name="input--name" class="input--name" type="text" placeholder="Ваше имя" required>
                    <h4 class="form--name">Телефон</h4>
                    <input name="input--phone" class="input2--phone" type="tel" placeholder="Номер вашего телефона" value="+7" placeholder="Номер вашего телефона" pattern="[+]{1}[7]{1}[0-9]{10}"
                    required>
                    <h4 class="form--message">Сообщение</h4>
                    <textarea name="textarea" class="input--phone" type="text" placeholder="Введите ваше сообщение"></textarea>
                    <h4 class="hidden form--message">URL</h4>
                    <input  name="form--url" class="hidden" type="url" placeholder="Впишите URL">
                    <input  name="id" type="hidden" value = "1">
                    <button class="form__btn" type="submit">Отправить</button>
                </form>
            </div>
            <div class="feedback-overlay hidden"></div>
        <!-- /modal -->
          
        <div class="header__info">
            <div class="container menu-container header__container">
                <div class="header__info-items">
                    <div class="header__info-item">
                        <img class="info__item-img" src="img/clock-icon.svg" alt="" loading="lazy">
                        <div class="info__item-content">
                            <h2 class="info__item-header">Мы открыты Пн - Пт</h2>
                            <div class="info__item-detail">08:00 - 18:00</div>
                        </div>
                    </div>
                    <div class="header__info-item">
                        <img class="info__item-img" src="img/phone_icon.svg" alt="" loading="lazy">
                        <div class="info__item-content">
                            <h2 class="info__item-header">Позвоните нам</h2>
                            <div class="info__item-detail">+7 (987) 290-06-44</div>
                        </div>
                    </div>
                    <div class="header__info-item">
                        <img class="info__item-img" src="img/address_icon.svg" alt=""loading="lazy">
                        <div class="info__item-content">
                            <h3 class="info__item-header">Наш адрес</h2>
                                <div class="info__item-detail">г. Казань, Дорожный переулок, 3а</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section id="we-offer" class="we-offer">
            <div class="container we-offer--mobile-container">
                <h2 class="we-offer__title">Что <span class="yellow">мы предлагаем</span></h2>
                <h3 class="we-offer__subtitle">Полный цикл ремонта и поддержки</h3>
                <div class="we-offer__3-row">
                    <div class="we-offer__service we-offer__bg--yellow">
                        <div class="we-offer__service-title">Регламентное обслуживание</div>
                        <div class="we-offer__service-text">Лучший способ минимизировать<br> поломки - это проводить
                            регулярное обслуживание</div>
                        <div class="we-offer__service-watermark we-offer__service-watermark--yellow">Обслуживание</div>
                    </div>
                    <div class="we-offer__img">
                        <img src="img/we-offer__oil.jpg" alt="" loading="lazy">
                    </div>
                    <div class="we-offer__service we-offer__bg--light-gray">
                        <div class="we-offer__service-title">Капитальный<br> ремонт</div>
                        <div class="we-offer__service-text">Мы устраняем более 30 видов<br> основных неисправностей, и
                            список<br> постоянно растёт</div>
                        <div class="we-offer__service-watermark we-offer__service-watermark--light-gray">Ремонт</div>
                    </div>
                </div>
                <div class="we-offer__3-row">
                    <div class="we-offer__img">
                        <img src="img/comp_diag.jpg" alt="" loading="lazy">
                    </div>
                    <div class="we-offer__service we-offer__bg--dark-gray">
                        <div class="we-offer__service-title yellow">Компьютерная<br> диагностика</div>
                        <div class="we-offer__service-text white">Диагностика<br> и консультирование</div>
                        <div class="we-offer__service-watermark we-offer__service-watermark--dark-gray">Диагностика</div>
                    </div>
                    <div class="we-offer__img">
                        <img src="img/engine.jpg" alt="" loading="lazy">
                    </div>
                </div>
            </div>
        </section>

         <section class="services">
            <div class="container services__container">
                <h2 class="services__title">Услуги</h2>
                <div class="services__inner">
                    <ul class="services__list services__left">
                        <li>Ремонт ГБЦ</li>
                        <li>Шлифование коленвала</li>
                        <li>Хонингование</li>
                        <li>Ремонт форсунок</li>
                        <li>Расточка блока цилиндров</li>
                        <li>Замена поршневой группы</li>
                        <li>Гильзовка блоков цилиндра</li>
                        <li>Ремонт блока цилиндров</li>
                    </ul>
                    <ul class="services__list services__right">
                        <li>Ремонт и восстановление коленчатых валов</li>
                        <li>Компьютерная диагностика</li>
                        <li>Снятие и установка двигателя</li>
                        <li>Выездной ремонт и диагностика двигателя</li>
                        <li>Ремонт дизельного двигателя</li>
                        <li>Прошивка блока управления двигателя</li>
                        <li>Ремонт и восстановление головки блока цилиндров</li>
                        <li>Диагностика двигателя (бесплатно при первом посещении)</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="how-we-work">
            <div class="container how-we-work__container">
                <h2 class="how-we-work__title"><span class="yellow">Как</span> мы работаем</h2>
                <div class="how-we-work__items">

                    <div class="how-we-work__item">
                        <div class="how-we-work__item-info odd">
                            <div class="how-we-work__item-number">1</div>
                            <div class="how-we-work__item-text">ВЫ ЗВОНИТЕ НАМ</div>
                        </div>
                        <img class="how-we-work__item-img" src="img/you_call.jpg" alt="" loading="lazy">
                    </div>
                    <div class="how-we-work__item">
                        <img class="how-we-work__item-img hww__item-img--order-2" src="img/you_choose.jpg" alt="" loading="lazy">
                        <div class="how-we-work__item-info hww__item-info--order-1 honest">
                            <div class="how-we-work__item-number">2</div>
                            <div class="how-we-work__item-text">ВЫБИРАЕТЕ УСЛУГУ</div>
                        </div>
                    </div>
                    <div class="how-we-work__item">
                        <div class="how-we-work__item-info odd">
                            <div class="how-we-work__item-number">3</div>
                            <div class="how-we-work__item-text">ОСТАВЛЯЕТЕ АВТО</div>
                        </div>
                        <img class="how-we-work__item-img" src="img/you_drop.jpg" alt="" loading="lazy">
                    </div>
                    <div class="how-we-work__item">
                        <img class="how-we-work__item-img hww__item-img--order-2" src="img/you_accept.jpg" alt="" loading="lazy">
                        <div class="how-we-work__item-info hww__item-info--order-1 honest">
                            <div class="how-we-work__item-number">4</div>
                            <div class="how-we-work__item-text">ПРИНИМАЕТЕ РАБОТУ</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="feedback">
            <div class="container">
                <h2 class="feedback__title">Мы <span class="yellow">вам</span> перезвоним</h2>
                <form class="feedback__form" action="php/feedback.php" method="post">
                    <h4 class="form--name">Имя</h4>
                    <input name="input--name" class="input--name" type="text" placeholder="Ваше имя" required>
                    <h4 class="form--phone">Телефон</h4>
                    <input name="input--phone" class="input--phone" type="tel" value="+7" placeholder="Номер вашего телефона" pattern="[+]{1}[7]{1}[0-9]{10}"
                    required>
                    <h4 class="hidden form--message">URL</h4>
                    <input  name="form--url" class="hidden" type="url" placeholder="Впишите URL">
                    <input  name="id" type="hidden" value = "2">
                    <button class="form__btn" type="submit">Отправить</button>
                </form>
            </div>
        </section>

        <section class="engines">
            <div class="container engines__container--no-padding engines__container">
                <div class="engine-items">
                    <div class="engine-item">
                        <img class="engine-img" src="img/engine_1.png" alt="" loading="lazy">
                        <table class="engines__table">
                            <caption class="engine-title">Двигатель КАМАЗ 740.10</caption>
                            <tr>
                                <td class="td--left">Новый:</td>
                                <td class="td--right">от 483 000 руб.</td>
                            </tr>
                            <tr>
                                <td class="td--left">После кап. ремонта:</td>
                                <td class="td--right">от 483 000 руб.</td>
                            </tr>
                            <tr>
                                <td class="td--left">Услуга кап. ремонт:</td>
                                <td class="td--right">от 50 000 руб.</td>
                            </tr>
                        </table>
                    </div>
                    <div class="engine-item">
                        <img class="engine-img" src="img/engine_2.png" alt="" loading="lazy">
                        <table class="engines__table">
                            <caption class="engine-title">Двигатель КАМАЗ 740.11</caption>
                            <tr>
                                <td class="td--left">Новый:</td>
                                <td class="td--right">от 596 150 руб.</td>
                            </tr>
                            <tr>
                                <td class="td--left">После кап. ремонта:</td>
                                <td class="td--right">от 320 200 руб.</td>
                            </tr>
                            <tr>
                                <td class="td--left">Услуга кап. ремонт:</td>
                                <td class="td--right">от 140 000 руб.</td>
                            </tr>
                        </table>
                    </div>
                    <div class="engine-item">
                        <img class="engine-img" src="img/engine_3.png" alt="" loading="lazy">
                        <table class="engines__table">
                            <caption class="engine-title">Двигатель CUMMINS</caption>
                            <tr>
                                <td class="td--left">Новый:</td>
                                <td class="td--right">от 811 450 руб.</td>
                            </tr>
                            <tr>
                                <td class="td--left">После кап. ремонта:</td>
                                <td class="td--right">от 520 200 руб.</td>
                            </tr>
                            <tr>
                                <td class="td--left">Услуга кап. ремонт:</td>
                                <td class="td--right">от 240 000 руб.</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section id="price-list" class="price-list">
            <div class="container">
                <h2 class="price-list__title">Прайс-лист</h2>
                <div class="price-list__item">
                    <table class="price-list__table">
                        <caption class="price-list__caption">РАСТОЧКА БЛОКА и ХОНИНГОВАНИЕ ЦИЛИНДРОВ</caption>
                        <tr><td>Ока</td><td>1 500 руб.</td></tr>
                        <tr><td>Ваз</td><td>2 500 руб.</td></tr>
                        <tr><td>Газ-406</td><td>3 500 руб.</td></tr>
                        <tr><td>Газ-421</td><td>3 800 руб.</td></tr>
                        <tr><td>Импортные легковые 3ц</td><td>3 500 руб.</td></tr>
                        <tr><td>Импортные легковые 4ц</td><td>4 000 руб.</td></tr>
                        <tr><td>Импортные легковые 5ц</td><td>4 500 руб.</td></tr>
                        <tr><td>Импортные легковые 6ц</td><td>5 500 руб.</td></tr>
                        <tr><td>Импортные грузовые 4ц</td><td>5 000 руб.</td></tr>
                        <tr><td>Импортные грузовые 6ц</td><td>8 500 руб.</td></tr>
                        <tr><td>V -образные легковые 6ц</td><td>8 500 руб.</td></tr>
                        <tr><td>V образные 8ц</td><td>11 500 руб.</td></tr>
                        <tr><td>Через размер расточка</td><td>+ 20% от стоимости</td></tr>
                        <tr><td>Расточка Вакуум насоса короткий</td><td>3 000 руб.</td></tr>
                        <tr><td>Расточка Вакуум насоса (корпус насоса) длинный</td><td>4 000 руб.</td></tr>
                        <tr><td>Цилиндр одиночный (мото/квадро/лодка)</td><td>от 1 500 руб.</td></tr>
                        <tr><td><br></td></tr>
                        <tr><td colspan="2">ХОНИНГОВКА ЦИЛИНДРА ОТДЕЛЬНО 2/3 от стоимости расточки</td></tr>
                    </table>
                    <img class="price-table__img" src="img/price_1.png" alt="" loading="lazy">
                </div>
                <div class="price-list__item">
                    <img class="price-table__img price--2" src="img/price_2.png" alt="" loading="lazy">
                    <table class="price-list__table price--1">
                        <caption class="price-list__caption">РЕМОНТ ГБЦ</caption>
                        <tr><td>Рассухарить клапан легковые отечеств</td><td>25 руб. за шт.</td>
                        <tr><td>Засухарить клапан легковые отечеств</td><td>50 руб. за шт.</td>
                        <tr><td>Рассухарить клапан легковые иномарки</td><td>50 руб. за шт.</td>
                        <tr><td>Засухарить клапан легковые иномарки</td><td>75 руб. за шт.</td>
                        <tr><td>Правка седла клапана легковые отечеств.</td><td>150 руб. за шт.</td>
                        <tr><td>Правка седла клапан легковые иномарки</td><td>250 руб. за клапан</td>
                        <tr><td>Замена направляющей клапана легковые отечеств.</td><td>150 руб. за шт.</td>
                        <tr><td>Замена направляющей клапана легковые иномарки</td><td>200-450 руб. (зависит от доработки)</td></tr>
                        <tr><td><br></td></tr>
                        <tr><td>Опрессовка гбц легковые отечеств. 4ц Газ/Умз</td><td><br>1 300 руб.</td></tr>
                        <tr><td>Опрессовка гбц легковые иномарки 4ц</td><td>2 000 руб.</td></tr>
                        <tr><td>Опрессовка гбц Газ-53</td><td>2 500 руб.</td></tr>
                        <tr><td>Опрессовка 5 ц легковые иномарки</td><td>2 500 руб.</td></tr>
                        <tr><td>Опрессовка легковые 6ц</td><td>2 800 руб.</td></tr>
                        <tr><td>Опрессовка грузовые 4 ц Мтз/Камминз</td><td>2 800 руб.</td></tr>
                        <tr><td>Опрессовка 6ц грузовые Камминз</td><td>3 300 руб.</td></tr>
                        <tr><td>Опрессовка блока легковые иномарки 4ц</td><td>3 500 руб.</td></tr>
                        <tr><td>Опрессовка легковые блок отечеств 4ц</td><td>3 000 руб.</td></tr>
                        <tr><td>Опрессовка блока грузовые 4ц</td><td>4 500 руб.</td></tr>
                    </table>
                </div>
                <div class="price-list__item">
                    <table class="price-list__table">
                        <caption class="price-list__caption">ФРЕЗЕРОВКА ГБЦ</caption>
                        <tr><td>Ока</td><td>500 руб.</td></tr>
                        <tr><td>Ваз</td><td>700 руб.</td></tr>
                        <tr><td>Газ-406/Умз-80</td><td>800 руб.</td></tr>
                        <tr><td>Легковые иномарки</td><td>900 руб.</td></tr>
                        <tr><td>Легковые иномарки 5ц</td><td>1 200 руб.</td></tr>
                        <tr><td>Легковые иномарки 6ц</td><td>1 400 руб.</td></tr>
                        <tr><td>Грузовые иномарки (чугун) 4ц Камминз/Мтз</td><td>1 500 руб.</td></tr>
                        <tr><td>Грузовые иномарки 6ц камминз</td><td>2 500 руб.</td></tr>

                        <!-- hidden -->
                        <!-- <tr><td><br></td></tr>
                        <tr><td colspan="2" class="price-list__caption price-list__additional-caption">ШЛИФОВКА КОЛЕНВАЛА</td></tr>
                        <tr><td>Ока -1600</td><td>1600</td></tr>
                        <tr><td>Ваз-2400</td><td>2400</td></tr>
                        <tr><td>Газ -406 -</td><td></td></tr>
                        <tr><td>Газ -421/402</td><td></td></tr>
                        <tr><td>Газ 52/53-</td><td></td></tr>
                        <tr><td>Зил 130-</td><td></td></tr>
                        <tr><td>Мтз Д-240/245-</td><td></td></tr>
                        <tr><td>А-01-</td><td></td></tr>
                        <tr><td>СМД-31</td><td></td></tr>
                        <tr><td>МТЗ Д-260(6ц)</td><td></td></tr>
                        <tr><td>ЯМЗ -236- </td><td></td></tr>
                        <tr><td>ЯМЗ-238-</td><td></td></tr>
                        <tr><td>А 41 -</td><td></td></tr>
                        <tr><td>ЮМЗ-</td><td></td></tr>
                        <tr><td>Т-40-</td><td></td></tr>
                        <tr><td>Т25-</td><td></td></tr> -->
                        <!-- hidden -->

                    </table>
                    <img class="price-table__img" src="img/price_3.png" alt="" loading="lazy">
                </div>
                <div class="price-list__item">
                    <img class="price--2" src="img/price_4.png" alt="" loading="lazy">
                    <table class="price-list__table price--1">
                        <caption class="price-list__caption">ГИЛЬЗОВКА БЛОКОВ</caption>
                        <tr><td>Ока</td><td>3 500 руб.</td></tr>
                        <tr><td>Ваз</td><td>6 500 руб.</td></tr>
                        <tr><td>Газ-406</td><td>11 500 руб.</td></tr>
                        <tr><td>Газ-421</td><td>12 500 руб.</td></tr>
                        <tr><td>Импортные легковые 4ц</td><td>12 000 руб.</td></tr>
                        <tr><td>Импортные легковые 5ц</td><td>14 500 руб.</td></tr>
                        <tr><td>Импортные грузовые 4ц</td><td>13 500 руб.</td></tr>
                        <tr><td>Импортные грузовые 6ц</td><td>18 000 руб.</td></tr>
                        <tr><td>Vобразные 6ц</td><td>24 000 руб.</td></tr>
                        <tr><td>V-образные 8ц</td><td>31 000 руб.</td></tr>
                        <tr><td>Мото/лодка</td><td>2 500 руб.</td></tr>
                        <tr><td><br></td></tr>
                        <tr><td colspan="2" class="price-list__caption price-list__additional-caption">БЛОК ТОРЦОВКА</td></tr>
                        <tr><td>Легковые иномарки / отечеств 4ц</td><td>1500 руб.</td></tr>
                        <tr><td>Легковые иномарки 5ц </td><td>1800 руб.</td></tr>
                        <tr><td>Легковые иномарки 6ц</td><td>2500 руб.</td></tr>
                        <tr><td>Грузовые 4ц камминз</td><td>1500 руб.</td></tr>
                        <tr><td>Грузовые 6ц</td><td>2500 руб.</td></tr>
                        <tr><td>Легковые 3ц</td><td>1200 руб.</td></tr>
                    </table>
                </div>

                <!-- hidden -->
                <!-- <div class="price-list__item">
                    <table class="price-list__table">
                    <tr><td>Импортные легковые4 ц</td><td></td></tr>
                    <tr><td>Импортные легковые (под вкладыши)</td><td></td></tr>
                    <tr><td>Импортные легковые 3 ц</td><td></td></tr>
                    <tr><td>Импортные легковые 5ц</td><td></td></tr>
                    <tr><td>Импортные легковые 6ц</td><td></td></tr>
                    <tr><td>Импортные коммерческие 3ц ( мини - трактор)</td><td></td></tr>
                    <tr><td>Импортные коммерческие ( форд транзит, фиат дукато, ивеко)</td><td></td></tr>
                    <tr><td>Камаз</td><td></td></tr>
                    <tr><td>Камминз-2.8</td><td></td></tr>
                    <tr><td>Камминз 3.8</td><td></td></tr>
                    <tr><td>Камминз 6 ц</td><td></td></tr>
                    <tr><td>Проверка коленвала на размер биение-</td><td></td></tr>
                    <tr><td>Правка коленвала легковые 4ц</td><td></td></tr>
                    <tr><td>Правка коленвала грузовые</td><td></td></tr>
                    <tr><td>Полировка коленвала легкове</td><td></td></tr>
                    <tr><td>Полировка коленвала грузовые</td><td></td></tr>
                    <tr><td>Снятие шестеренки/ противовесов-</td><td></td></tr>
                    <tr><td>Шлифовка коленвала через размер </td><td></td></tr>
                    </table>
                    <img class="price-table__img" src="img/price_5.png" alt="" loading="lazy">
                </div> -->
                <!-- /hidden -->

            </div>
        </section>

        <section class="write-us">
            <div class="container">
                <h2 class="feedback__title">Напишите нам</h2>
                <form class="feedback__form" action="php/feedback.php" method="post">
                    <h4 class="form--name">Имя</h4>
                    <input name="input--name" class="input--name" type="text" placeholder="Ваше имя" required>
                    <h4 class="form--phone">Телефон</h4>
                    <input name="input--phone" class="input2--phone" type="tel" placeholder="Номер вашего телефона" value="+7" placeholder="Номер вашего телефона" pattern="[+]{1}[7]{1}[0-9]{10}"
                    required>
                    <h4 class="form--message">Сообщение</h4>
                    <textarea name="textarea" class="input--phone" type="text" placeholder="Введите ваше сообщение"></textarea>
                    <h4 class="hidden form--message">URL</h4>
                    <input  name="form--url" class="hidden" type="url" placeholder="Впишите URL">
                    <input  name="id" type="hidden" value = "3">
                    <button class="form__btn" type="submit">Отправить</button>
                </form>
            </div>
        </section>
          
    </main>

    <footer id="contacts">
        <div class="footer__inner">
            <div class="footer-left">
                <div class="footer__title"><span class="yellow">Ремонт двигателей</span><br>с гарантией</div>
                <div class="footer__contact-info"><a href="tel:+79872900644">+7 (987) 290-06-44</a></div>
                <div class="footer__contact-info">ayrat202@mail.ru</div>
                <div class="footer__contact-info">г. Казань, Дорожный переулок, д. 3а</div>
                <div class="footer__contact-info footer__contact-info--last">08:00 - 18:00</div>
                <div class="footer__socials">
                    <a href="https://wa.me/+79172355944"><img src="img/whatsapp_icon.svg" alt="WatsApp"></a>
                    <a href="https://t.me/Ayratart" target="_blank"><img src="img/telegram_icon.svg" alt="Telegram"></a>
                </div>
                <div class="footer__copyright footer__copyright--pc">2022 himmelen.space</div>
            </div>
            <div class="footer-right">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1c2c06cf24ce40fc6cac003f098b90d981b8fb94f5e4638db87697ab7f6c8382&amp;width=100%25&amp;height=506&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
            <div class="footer__copyright footer__copyright--mobile">2022 himmelen.space</div>
        </div>
    </footer>

    <script src="/js/modal.js"></script>
    <script src="/js/topScroll.js"></script>
    <script src="/js/burger.js"></script>
    
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();
    for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
    k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(92002874, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
    });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/92002874" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

</body>

</html>
