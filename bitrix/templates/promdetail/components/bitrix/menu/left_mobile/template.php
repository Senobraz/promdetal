<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php $this->setFrameMode(true); ?>
<?php if (empty($arResult)) return; ?>
<?php function show_html_ul_menu_m($arItems, $htmlOptions = array())
{ ?>
    <div class="roll-list-mobile__menu">
        <?php foreach ($arItems as $arItem) : ?>
            <a href="<?= $arItem["LINK"] ?>" class="roll-list-mobile__menu-item <?= $htmlOptions['class-item'] ?>"><?= $arItem["TEXT"] ?></a>
            <? if (count($arItem["ITEMS"])) : ?>
                <div class="roll-list-mobile__menu-open">
                    <?= show_html_ul_menu_m($arItem["ITEMS"], array('class-item'=>'roll-list-mobile__menu-item roll-list-mobile__menu-item_active')) ?>
                </div>
            <? endif ?>
        <?php endforeach ?>
    </div>
<?php } ?>
<?= show_html_ul_menu_m($arResult) ?>