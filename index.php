<!DOCTYPE html>
<html>
<?php
include 'include/head.php';
?>
<body>

<header class="header">
    <div class="container">
        <div class="row align-center-vertical">
            <img src="images/logo.png">
            <div class="logoText">
                Помогая строить счастье других,
                мы находим своё собственное!
            </div>
            <!--<div class="visible-xl ghostBlock"></div>-->
            <a href="#callback" class="modalbox btnRed btnDef btnBSmall">Заказать звонок</a>
        </div>
    </div>
    <div class="container">
        <div class="row align-space-between">
            <nav class="navbar navbar-expand-lg navbar-light rounded">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                        aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample09">
                    <ul class="navbar-nav mr-auto align-space-between">
                        <li class="nav-item">
                            <a class="nav-link" href="#s2">Преимущества</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#s3">Цены и планировки</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#s4">Инфраструктура</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#s6">Ипотека</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#s7">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               onclick="yaCounterXXXX.reachGoal('Telephone');
                                        gtag('event', 'clickdopphone', { 'event_category': 'Telephone', 'event_action': 'Click' });
                                        return true;"
                               href="tel:+74822755631">+7 (4822) <span>55-55-55</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="nav-item">
                <a class="nav-link nav-link-modile"
                   onclick="yaCounterXXXX.reachGoal('Telephone');
                                        gtag('event', 'clickdopphone', { 'event_category': 'Telephone', 'event_action': 'Click' });
                                        return true;"
                   href="tel:+74822755631">+7 (4822) <span>55-55-55</span></a>
            </div>
        </div>
    </div>
</header>

<section id="s1" class="section section1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="offer">
                    <a href="#tree" class="one-metr action-position modalbox">

                        <div class="text-action text-one-metr">Только в&nbsp;декабре! <strong>Въежай и&nbsp;наряжай! 1&nbsp;кв.&nbsp;м
                                для ёлки в
                                подарок!</strong></div>

                        <img src="images/action/one-metr.jpg" alt="">
                    </a>

                    <a href="#iphone" class="iphone action-position modalbox">

                        <div class="text-action text-iphone">IPhone в&nbsp;подарок!</div>

                        <img src="images/action/iphone.jpg" alt="">
                    </a>

                    <a href="#remont" class="remont action-position modalbox">
                        <div class="gradient">
                            <div class="text-action text-remont">Ремонт под ключ. <strong>Экономия до&nbsp;100&nbsp;000&nbsp;<i
                                            class="fas fa-ruble-sign"></i></strong></div>
                        </div>
                        <img src="images/action/remont.jpg" alt="">
                    </a>

                    <a href="#kopilka" class="kopilka action-position modalbox">
                        <div class="gradient">
                            <div class="text-action text-kopilka">Квартиры за&nbsp;890&nbsp;100&nbsp;рублей!</div>
                        </div>
                        <img src="images/action/kopilka.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="s2" class="section section2">
    <div class="container">
        <div class="row">
            <!--<div class="col-12">
                            <h2>Краткая информация</h2>
                        </div>-->
            <div class="col-12 col-sm-6 col-lg-3 node">
                <div class="node-icon"><img src="img/1.png" alt=""></div>
                <div>
                    <h3>Комфортная городская среда</h3>
                </div>
                <div>
                    <ul>
                        <li>10&nbsp;минут до&nbsp;центра</li>
                        <li>Экологически чистый район</li>
                        <li>Развитая инфраструктура</li>
                        <li>Строительство детского сада</li>
                        <li>Проектирование новой школы</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 node">
                <div class="node-icon"><img src="img/2.png" alt=""></div>
                <div>
                    <h3>Современные технологии строительства</h3>
                </div>
                <div>
                    <ul>
                        <li>Стены из&nbsp;керамического кирпича и&nbsp;керамических блоков Porotherm</li>
                        <li>Паропроницаемость создает отличный микро-климат в&nbsp;доме</li>
                        <li>Уровень шумоизоляции более 55&nbsp;Дб.</li>
                        <li>Бесшумные лифты OTIS</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 node">
                <div class="node-icon"><img src="img/3.png" alt=""></div>
                <div>
                    <h3>Отделка квартир под ключ</h3>
                </div>
                <div>
                    <ul>
                        <li>30&nbsp;видов планировок</li>
                        <li>Отделка от&nbsp;застройщика</li>
                        <li>Неограниченный выбор материалов</li>
                        <li>Услуги дизайнера бесплатно</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 node">
                <div class="node-icon"><img src="img/4.png" alt=""></div>
                <div>
                    <h3>Безопасность</h3>
                </div>
                <div>
                    <ul>
                        <li>Автоматическая система оповещения пожаротушения, система дымоудаления, пожарная
                            сигнализация.
                        </li>
                        <li>Электронный контроль доступа, система видеонаблюдения.</li>
                    </ul>
                </div>

            </div>
            <div class="col-12 btnCentr">
                <a href="#view" class="btnRed btnDef btnBig modalbox">Записаться на просмотр</a>
            </div>
        </div>
    </div>
</section>

<section id="s3" class="section section3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Цены и&nbsp;планировки квартир</h2>

                <div class="row apartment">
                    <div class="col-12 col-md-7">
                        <div class="image-apartment">
                            <img src="images/apartament/studia/20.70.jpg" alt="студия">
                        </div>
                    </div>
                    <div class="col-12 col-md-5 content-apartment">
                        <h3>Квартира-студия</h3>
                        <ul>
                            <li>Общая площадь от&nbsp;20,7&nbsp;м&sup2;</li>
                            <li>Жилая площадь от&nbsp;18,80&nbsp;м&sup2;</li>
                            <li>Корпуса
                                <ul>
                                    <li>Корпус 4&nbsp;&mdash; срок сдачи&nbsp;IV квартал 2017</li>
                                    <li>Корпус 7&nbsp;&mdash; срок сдачи&nbsp;IV квартал 2018</li>
                                </ul>
                            </li>
                        </ul>
                        <div class="price">от&nbsp;890&nbsp;100&nbsp;<i class="fas fa-ruble-sign"></i></div>
                        <div>
                            <a href="#ks" class="btnRed btnDef btnBig modalbox">Подробнее</a>
                        </div>
                    </div>
                </div>

                <div class="row apartment">
                    <div class="col-12 col-md-7">
                        <div class="image-apartment">
                            <img src="images/apartament/one-room/29.40.jpg" alt="Однокомнатная квартира">
                        </div>
                    </div>
                    <div class="col-12 col-md-5 content-apartment">
                        <h3>Однокомнатная квартира</h3>
                        <ul>
                            <li>Общая площадь от&nbsp;20,7&nbsp;м&sup2;</li>
                            <li>Жилая площадь от&nbsp;18,80&nbsp;м&sup2;</li>
                            <li>Корпуса
                                <ul>
                                    <li>Корпус 3&nbsp;&mdash; дом сдан</li>
                                    <li>Корпус 4&nbsp;&mdash; срок сдачи&nbsp;IV квартал 2017</li>
                                    <li>Корпус 7&nbsp;&mdash; срок сдачи&nbsp;IV квартал 2018</li>
                                </ul>
                            </li>
                        </ul>
                        <div class="price">от&nbsp;1&nbsp;220&nbsp;100&nbsp;<i class="fas fa-ruble-sign"></i></div>
                        <div>
                            <a href="#k1" class="btnRed btnDef btnBig modalbox">Подробнее</a>
                        </div>
                    </div>
                </div>

                <div class="row apartment">
                    <div class="col-12 col-md-7">
                        <div class="image-apartment">
                            <img src="images/apartament/two-room/58.70.jpg" alt="Двухкомнатная квартира">
                        </div>
                    </div>
                    <div class="col-12 col-md-5 content-apartment">
                        <h3>Двухкомнатная квартира</h3>
                        <ul>
                            <li>Общая площадь от&nbsp;20,7&nbsp;м&sup2;</li>
                            <li>Жилая площадь от&nbsp;18,80&nbsp;м&sup2;</li>
                            <li>Корпуса
                                <ul>
                                    <li>Корпус 4&nbsp;&mdash; срок сдачи&nbsp;IV квартал 2017</li>
                                    <li>Корпус 7&nbsp;&mdash; срок сдачи&nbsp;IV квартал 2018</li>
                                </ul>
                            </li>
                        </ul>
                        <div class="price">от&nbsp;1&nbsp;911&nbsp;311&nbsp;<i class="fas fa-ruble-sign"></i></div>
                        <div>
                            <a href="#k2" class="btnRed btnDef btnBig modalbox">Подробнее</a>
                        </div>
                    </div>
                </div>

                <div class="row apartment">
                    <div class="col-12 col-md-7">
                        <div class="image-apartment">
                            <img src="images/apartament/three-room/77.80.jpg" alt="Трехкомнатная квартира">
                        </div>
                    </div>
                    <div class="col-12 col-md-5 content-apartment">
                        <h3>Трехкомнатная квартира</h3>
                        <ul>
                            <li>Общая площадь от&nbsp;20,7&nbsp;м&sup2;</li>
                            <li>Жилая площадь от&nbsp;18,80&nbsp;м&sup2;</li>
                            <li>Корпуса
                                <ul>
                                    <li>Корпус 3&nbsp;&mdash; дом сдан</li>
                                    <li>Корпус 4&nbsp;&mdash; срок сдачи&nbsp;IV квартал 2017</li>
                                    <li>Корпус 7&nbsp;&mdash; срок сдачи&nbsp;IV квартал 2018</li>
                                </ul>
                            </li>
                        </ul>
                        <div class="price">от&nbsp;2&nbsp;768&nbsp;768&nbsp;<i class="fas fa-ruble-sign"></i></div>
                        <div>
                            <a href="#k3" class="btnRed btnDef btnBig modalbox">Подробнее</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="s4" class="section section4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Инфраструкту&shy;ра</h2>
            </div>
            <div class="col-6 col-md-4 infrastructure">
                <img src="img/infrastructure/1.png" alt="4 детских сада">
                <div>
                    <h3>Магазины</h3>
                    <p>"Пятерочка", "Магнит", "Рублевъ"</p>
                </div>
            </div>
            <div class="col-6 col-md-4 infrastructure">
                <img src="img/infrastructure/2.png" alt="4 детских сада">
                <div>
                    <h3>Близость транспорта</h3>
                    <p>Общественный транспорт в 2-х минутах ходьбы</p>
                </div>
            </div>
            <div class="col-6 col-md-4 infrastructure">
                <img src="img/infrastructure/3.png" alt="4 детских сада">
                <div>
                    <h3>Место для прогулок</h3>
                    <p>Пространство для пеших и вело-прогулок</p>
                </div>
            </div>
            <div class="col-6 col-md-4 infrastructure">
                <img src="img/infrastructure/4.png" alt="4 детских сада">
                <div>
                    <h3>3 школы</h3>
                    <p>(№5, 32, 131, 156), возведение собственного детского сада на 110 мест </p>
                </div>
            </div>
            <div class="col-6 col-md-4 infrastructure">
                <img src="img/infrastructure/5.png" alt="4 детских сада">
                <div>
                    <h3>Детские и спортивные площадки</h3>
                    <!--<p></p>-->
                </div>
            </div>
            <div class="col-6 col-md-4 infrastructure">
                <img src="img/infrastructure/6.png" alt="4 детских сада">
                <div>
                    <h3>4 детских сада</h3>
                    <p>(№5, 32, 131, 156), возведение собственного детского сада на 110 мест </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="s5" class="section section5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3 steps">
                <div class="step">1</div>

                <div class="text-step">
                    <h3>Связаться с&nbsp;нами</h3>

                </div>
                <div>Позвонить по&nbsp;телефону&nbsp;+7 (4822)55-55-55 или отправить заявку в&nbsp;офис и&nbsp;договориться о&nbsp;встрече в&nbsp;любое удобное для вас время</div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 steps">
                <div class="step">2</div>

                <div class="text-step">
                    <h3>Выбор квартиры и&nbsp;подготовка документов</h3>

                </div>
                <div>Посмотреть вживую жилой комплекс</div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 steps">
                <div class="step">3</div>

                <div class="text-step">
                    <h3>Оплата и&nbsp;передача документов</h3>

                </div>
                <div>Оформляем документы и&nbsp;проводим регистрацию</div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 steps">
                <div class="step">4</div>

                <div class="text-step">
                    <h3>Заселение</h3>

                </div>
                <div>Въезжаете в&nbsp;новую квартиру и&nbsp;отмечаете новоселье</div>
            </div>
            <div class="col-12">

                <form class="styleForm s5Form" id="s5Form" action="" method="get" onsubmit="
                          yaCounterXXXX.reachGoal('s5_Form');
                           gtag('event', 'sendemailfamily', { 'event_category': 's5_Form', 'event_action': 'SuccessfulSending', });
                           return true;">
                    <!-- Скрытые поля, которые содержат данные из UTM метки -->
                    <input type="hidden" name="source" value="">
                    <input type="hidden" name="term" value="">
                    <input type="hidden" name="medium" value="">
                    <!--/-->
                    <h3>Записаться на&nbsp;просмотр</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" name="ffName" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control masked" name="ffPhone" placeholder="Ваш телефон" required="">
                    </div>
                    <div class="form-group">
                        <button class="btnRed btnDef btnBig">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="s6" class="section section6">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Ипотека</h2>
            </div>
            <div class="col-sm-12 col-md-6 bank-ipoteka">
                <div class="stavka">от Х,Х%</div>
                <img src="images/build/p1.png" alt="">
            </div>
            <div class="col-sm-12 col-md-6 bank-ipoteka">
                <div class="stavka">от Х,Х%</div>
                <img src="images/build/p2.png" alt="">
            </div>
            <div class="col-sm-12 col-md-6 bank-ipoteka">
                <div class="stavka">от Х,Х%</div>
                <img src="images/build/p3.png" alt="">
            </div>
            <div class="col-sm-12 col-md-6 bank-ipoteka">
                <div class="stavka">от Х,Х%</div>
                <img src="images/build/p4.png" alt="">
            </div>
        </div>
    </div>
</section>

<section id="s7" class="section section7">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aac6f8c8d58bef96e9cfe2280dd4f10370bdca9b024e4813f69a3c8119bc96b39&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
            <div class="col-sm-12 col-md-6">
                <h2>Контакты</h2>
            </div>


        </div>
    </div>
</section>


<footer id="s13" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="fb1">
                    <div class="footerLogo">
                        <img src="images/logo.png">
                    </div>
                    <div class="fb1Text">
                        Описание краткое застройщика
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="fb2">
                    <div class="fb2Title">
                        Контактная информация
                    </div>
                    <div class="fbLink">
                        E-mail: <a onclick="
                                yaCounter46711665.reachGoal('Email');
                                gtag('event', 'clickdopemail', { 'event_category': 'Email', 'event_action': 'Click', });
                                return true;" href="mailto:info@akropol69.ru">info@email.ru</a>
                    </div>
                    <div class="fbLink">
                        Тел.: <a onclick="
                                yaCounter46711665.reachGoal('Telephone');
                                 gtag('event', 'clickdopphone', { 'event_category': 'Telephone', 'event_action': 'Click', });
                                return true" href="tel:+74822755631">+7 (4822) 55-55-55</a>
                    </div>
                    <div class="fbLink">
                        Адрес: <span>Адрес</span>
                    </div>


                    <div class="fbCopy">
                        © 2017. Все права защищены.<br>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="fb3">
                    <!-- VK Widget -->
                    <div id="vk_groups" style="width: 200px; height: 210px; background: none;">
                        <iframe name="fXD71d6e" frameborder="0"
                                src="https://vk.com/widget_community.php?app=0&amp;width=200px&amp;_ver=1&amp;gid=83898784&amp;mode=3&amp;color1=&amp;color2=&amp;color3=35B55E&amp;class_name=&amp;url=http%3A%2F%2Ftvoyanovostroyka.ru%2F&amp;referrer=&amp;title=%D0%9A%D1%83%D0%BF%D0%B8%D1%82%D0%B5%20%D0%BD%D0%BE%D0%B2%D0%BE%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D1%83%20%D0%B2%20%D0%A2%D0%B2%D0%B5%D1%80%D0%B8%20%D0%B8%20%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D0%B5%20%D1%81%D1%82%D1%80%D0%B0%D1%85%D0%BE%D0%B2%D0%BA%D1%83%20%D0%B2%20%D0%BF%D0%BE%D0%B4%D0%B0%D1%80%D0%BE%D0%BA!&amp;160214f87f0"
                                width="200" height="185" scrolling="no" id="vkwidget1"
                                style="overflow: hidden; height: 210px;"></iframe>
                    </div>
                    <script type="text/javascript">
                        VK.Widgets.Group("vk_groups", {
                            mode: 3,
                            color3: '35B55E'
                        }, 83898784);

                    </script>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
include 'include/forms.php';
include 'include/links.php';
include 'include/scripts.php';
?>

</body>
</html>
