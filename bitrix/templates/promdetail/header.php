<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);

$isMainPage = $APPLICATION->GetCurPage(false) === SITE_DIR;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="imagetoolbar" content="no">
    <meta name="msthemecompatible" content="no">
    <meta name="cleartype" content="on">
    <meta name="HandheldFriendly" content="True">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta name="google" value="notranslate">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,400italic|Open+Sans+Condensed:300&amp;subset=latin,cyrillic"
        rel="stylesheet" type="text/css">

    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/scripts/fancybox/source/jquery.fancybox.css?t=1443039270907") ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/styles/app.min.css?t=1443039270907") ?>
    <? $APPLICATION->ShowHead() ?>
</head>

<body class="<?= $isMainPage ? '' : 'inner' ?>">
<? $APPLICATION->ShowPanel() ?>
<div class="wrapper">
    <header class="header__block">
        <div class="gray-block"></div>
        <div class="wrap">
            <a href="<?= SITE_DIR ?>">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo.png" alt="" class="logo"/>
            </a>

            <div class="header-info ov">
                <div class="top clearfix">
                    <ul class="links clearfix">
                        <li><a href="#" class="price">Скачать прайс-лист</a></li>
                        <li><a href="#" class="mail js-send-request">Отправить заявку</a></li>
                        <li><a href="#" class="call">On-line консультант</a></li>
                        <li><a href="#" class="mobile js-callback">Заказать звонок</a></li>
                    </ul>
                    <div class="phone"><span>+7 (351)</span>247-99-78/9</div>
                </div>
            </div>
        </div>
        <div class="wrap">
            <div class="bottom">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top",
                    array(
                        "ROOT_MENU_TYPE" => "top",
                        "MAX_LEVEL" => "3",
                        "CHILD_MENU_TYPE" => "left",
                        "USE_EXT" => "Y",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => array()
                    ),
                    false
                ); ?>
            </div>
        </div>
    </header>
    <header class="header__mobile">
        <div class="header__mobile-button"></div>
        <a href="/" class="header__mobile-logo"></a>
    </header>
    <div class="header__mobile-menu-wrap">
        <div class="header__mobile-menu-block">
            <div class="header__mobile-menu-close"></div>
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "top_mobile",
                array(
                    "ROOT_MENU_TYPE" => "top",
                    "MAX_LEVEL" => "3",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array()
                ),
                false
            ); ?>
            <div class="header__mobile-menu-feedback">
                <a href="#" class="header__mobile-menu-feedback-item header__mobile-menu-feedback-item_price">Скачать
                    прайс-лист</a>
                <a href="#"
                   class="header__mobile-menu-feedback-item header__mobile-menu-feedback-item_email js-send-request">Отправить
                    заявку</a>
                <a href="#" class="header__mobile-menu-feedback-item header__mobile-menu-feedback-item_consult">On-line
                    консультант</a>
                <a href="#"
                   class="header__mobile-menu-feedback-item header__mobile-menu-feedback-item_callback js-callback">Заказать
                    звонок</a>
            </div>
        </div>
    </div>
    <?php if ($isMainPage) : ?>

    <? else: ?>
    <div class="wrap">
        <div class="content-block">
            <div class="breadcrumbs">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "main",
                    array(
                        "START_FROM" => "0",
                        "PATH" => "",
                        "SITE_ID" => "-"
                    ),
                    false
                ); ?>
            </div>
            <h1><? $APPLICATION->ShowTitle(false) ?></h1>

            <div class="row">
                <div class="col-md-3">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "left",
                        array(
                            "ROOT_MENU_TYPE" => "left-menu",
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "left",
                            "USE_EXT" => "Y",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array()
                        ),
                        false
                    ); ?>
                    <div class="roll-list-mobile">
                        <div class="roll-list-mobile__title"><? $APPLICATION->ShowTitle(false) ?>
                            <div class="roll-list-mobile__title-dots"></div>
                        </div>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "left_mobile",
                            array(
                                "ROOT_MENU_TYPE" => "left-menu",
                                "MAX_LEVEL" => "2",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "Y",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array()
                            ),
                            false
                        ); ?>
                    </div>
                </div>
                <div class="col-md-9">
    <?php endif //if ($isMainPage) :?>