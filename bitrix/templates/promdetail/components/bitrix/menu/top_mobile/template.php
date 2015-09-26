<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? $this->setFrameMode(true); ?>
<?php if (empty($arResult)) return; ?>
<?php foreach ($arResult as $arItem) : ?>
    <a href="<?= $arItem["LINK"] ?>" class="<?= $arItem["SELECTED"] ? "active" : "" ?> header__mobile-menu-item"><?= $arItem["TEXT"] ?></a>
<?php endforeach ?>
