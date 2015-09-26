<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>

<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "slider",
    array(
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => "1",
        "NEWS_COUNT" => "12",
        "FIELD_CODE" => array(
            0 => "PREVIEW_PICTURE"
        ),
        "PROPERTY_CODE" => array(
            0 => "LINK",
        )
    ),
    false
); ?>
    <section class="catalogue">
        <div class="wrap">
            <h2 class="center-block blue">Каталог</h2>

            <div class="catalog-wrap clearfix">
                <div class="catalog-list catalog-list-desktop">
                    <div class="catalog-block one">
                        <div class="inner-block">
                            <div class="title">Фланцы стальные</div>
                            <ul class="products">
                                <li><a href="#">заглушки АТК 24.200.02-90</a>
                                </li>
                                <li><a href="#">заглушки ТММ</a>
                                </li>
                            </ul>
                            <a href="#" class="all">Смотреть все</a>
                        </div>
                    </div>
                    <div class="catalog-block two">
                        <div class="inner-block">
                            <div class="title">Фланцевые заглушки</div>
                            <ul class="products">
                                <li><a href="#">заглушки АТК 24.200.02-90</a>
                                </li>
                                <li><a href="#">заглушки ТММ</a>
                                </li>
                            </ul>
                            <a href="#" class="all">Смотреть все</a>
                        </div>
                    </div>
                    <div class="catalog-block three">
                        <div class="inner-block">
                            <div class="title">Изолирующие соединения</div>
                        </div>
                    </div>
                    <div class="catalog-block four">
                        <div class="inner-block">
                            <div class="title">Изолирующие фланцевые соединения</div>
                        </div>
                    </div>
                    <div class="catalog-block five">
                        <div class="inner-block">
                            <div class="title">Фланцевый крепеж</div>
                        </div>
                    </div>
                </div>
                <div class="catalog__list-mobile"><a href="#"
                                                     class="catalog__list-mobile-item catalog__list-mobile-item_one"><span
                            class="catalog__list-mobile-item-text">Фланцы стальные</span></a><a href="#"
                                                                                                class="catalog__list-mobile-item catalog__list-mobile-item_two"><span
                            class="catalog__list-mobile-item-text">Фланцевые заглушки</span></a>
                    <a
                        href="#" class="catalog__list-mobile-item catalog__list-mobile-item_three"><span
                            class="catalog__list-mobile-item-text">Изолирующие соединения</span>
                    </a><a href="#" class="catalog__list-mobile-item catalog__list-mobile-item_four"><span
                            class="catalog__list-mobile-item-text">Изолирующие фланцевые соединения</span></a>
                    <a href="#" class="catalog__list-mobile-item catalog__list-mobile-item_five"><span
                            class="catalog__list-mobile-item-text">Фланцевый крепеж</span>
                    </a><a href="#" class="catalog__list-mobile-item catalog__list-mobile-item_all"><span
                            class="catalog__list-mobile-item-text">смотреть все</span></a>
                </div>
                <div class="info-block">
                    <p>Профильная деятельность нашего предприятия - производство стальных фланцев, ИФС - изолирующих
                        фланцевых соединений и изолирующих соединений. Производство стальных фланцев ООО
                        «Челябпромдеталь»
                    </p>

                    <p>Фланцы стальные и ИФС - продукция, выпуск которой на ООО «Челябпромдеталь» был налажен в первую
                        очередь. Без качественного стального фланца невозможно произвести надежное фланцевое соединение.
                        Жесткий контроль качества на всех этапах производства
                        - прочная основа деловых отношений с нашими партнерами.</p>
                </div>
            </div>
            <div class="text-center"><a href="#" class="show-all btn btn-transparent">смотреть все</a>
            </div>
        </div>
    </section>
    <section class="quote-wrap clearfix">
        <div class="wrap">
            <div class="quote-block">
                <div class="quote">
                    <div class="text">Вся продукция проходит жесткий контроль качества в собственной лаборатории
                        неразрушающего контроля.Без качественного стального фланца невозмодно произвести надежное
                        фланцевое соединение
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="stats">
        <div class="wrap">
            <h2>челябпромдеталь — это</h2>

            <div class="row">
                <div class="stats-wrap clearfix">
                    <div class="col-sm-4 col-md-4 text-center">
                        <div class="digit">3</div>
                        <div class="text">Года успешной работы</div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="digit">450</div>
                        <div class="text">И более реализованных проектов</div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="digit">12</div>
                        <div class="text">Месяцев гарантии на любую продукцию</div>
                    </div>
                </div>
            </div>
            <div class="stats-text text-center">Профильная деятельность нашего предприятия - производство стальных
                фланцев, ИФС - изолирующих фланцевых соединений и изолирующих соединений. Производство стальных фланцев
                ООО "Челябпромдеталь"
            </div>
            <div class="text-center"><a href="#" class="btn btn-transparent">смотреть все</a>
            </div>
        </div>
    </section>
    <section class="feedback">
        <h2>связь с нами</h2>

        <div class="form-wrap feedback-form">
            <div class="wrap">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="photo-block pull-left">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/avatar1.jpg" alt=""/>
                        </div>
                        <div class="ov information-block">
                            <div class="title">Александр копранов</div>
                            <div class="profession">Руководитель проектов компании «Челябпромдеталь»</div>
                            <ul class="contact-list">
                                <li><a href="#" class="contact mail">offer@chelpromdetail.ru</a>
                                </li>
                                <li><a href="#" class="contact chat">chelpromdetail_alex</a>
                                </li>
                                <li><a href="#" class="contact phone">+7 (495) 778-05-27</a>
                                </li>
                            </ul>
                            <div class="info">работаем с 900 до 2100, включая выходные и праздничные дни</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="clearfix">
                                <div class="form-group input pull-left">
                                    <label for="name">Ваше имя</label>
                                    <input id="name" type="text"/>
                                </div>
                                <div class="form-group input pull-left">
                                    <label for="email">Ваше имя</label>
                                    <input id="email" type="text"/>
                                </div>
                            </div>
                            <div class="form-group area">
                                <label for="comment">Текст сообщения</label>
                                <textarea id="comment"></textarea>
                            </div>
                            <div class="form-group"><a href="#" class="btn btn-transparent white">отправить</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feedback-form_mobile">
                    <input id="name" type="text" placeholder="Ваше имя" class="feedback-form_mobile-input"/>
                    <input id="name" type="text" placeholder="Как с Вами связаться" class="feedback-form_mobile-input"/>
                    <input id="name" type="submit" value="отправить" class="feedback-form_mobile-submit"/>
                </div>
            </div>
        </div>
    </section>
    <section class="map">
        <h2>наши филиалы</h2>

        <div class="map-block">
            <div id="main-map" class="map">
                <script type="text/javascript" charset="utf-8"
                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=7OfR8tDotUhfDJXK7BXXZkQ96nLLrLB6&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;sourceType=constructor"></script>
            </div>
        </div>
    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>