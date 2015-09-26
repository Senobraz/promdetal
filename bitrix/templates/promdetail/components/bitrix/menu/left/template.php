<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php $this->setFrameMode(true); ?>
<?php if (empty($arResult)) return; ?>
<?php function show_html_ul_menu($arItems)
{ ?>
    <ul class="left-menu">
        <?php foreach ($arItems as $arItem) : ?>
            <li class="<?= $arItem["SELECTED"] ? "active" : "" ?>">
                <a href="<?= $arItem["LINK"] ?>"
                   class="link <?= $arItem["SELECTED"] ? "active" : "" ?>"><?= $arItem["TEXT"] ?></a>
                <? if (count($arItem["ITEMS"])) {
                    show_html_ul_menu($arItem["ITEMS"]);
                } ?>
            </li>
        <?php endforeach ?>
    </ul>
<?php } ?>
<?= show_html_ul_menu($arResult) ?>

