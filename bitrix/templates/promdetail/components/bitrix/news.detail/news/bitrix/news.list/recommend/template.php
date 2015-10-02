<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php $this->setFrameMode(true); ?>
<?php if(count($arResult['ITEMS']) > 0) : ?>
<div class="news__page-recommend">
    <div class="news__page-recommend-head">Советуем посмотреть:</div>
    <?php foreach($arResult["ITEMS"] as $arItem) : ?>
    <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="news__item">
        <div class="news__item-date"><?=  date('d | m | y', strtotime($arItem['ACTIVE_FROM'])) ?></div>
        <div class="news__item-text">
            <?= $arItem['NAME'] ?>
        </div>
    </a>
    <?php endforeach ?>
</div>
<?php endif ?>