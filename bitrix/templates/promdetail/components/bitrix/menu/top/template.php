<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? $this->setFrameMode(true); ?>
<?php if (empty($arResult)) return; ?>
<ul class="menu clearfix">
    <?php foreach ($arResult as $arItem) : ?>
        <li class="<?= $arItem["SELECTED"] ? "active" : "" ?>">
            <a href="<?= $arItem["LINK"] ?>"
               class="<?= $arItem["SELECTED"] ? "active" : "" ?>"><?= $arItem["TEXT"] ?></a>
            <? if (count($arItem["ITEMS"])) : ?>
                <ul>
                    <? foreach ($arItem["ITEMS"] as $arItemSub) : ?>
                        <li><a href="<?= $arItemSub["LINK"] ?>"
                               class="<?= $arItemSub["SELECTED"] ? "active" : "" ?>"><?= $arItemSub["TEXT"] ?></a></li>
                    <?php endforeach ?>
                </ul>
            <?php endif ?>
        </li>
    <?php endforeach ?>
</ul>