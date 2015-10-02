<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php $this->setFrameMode(true); ?>
<div class="news__content">
<?php foreach($arResult["ITEMS"] as $arItem) : ?>
    <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="news__item">
        <div class="news__item-date"><?=  date('d | m | y', strtotime($arItem['ACTIVE_FROM'])) ?></div>
        <div class="news__item-text"><?= $arItem['NAME'] ?></div>
    </a>
    <?php if($arItem['PROPERTIES']['FMAIN']['VALUE']) : ?>
    </div><!-- news__content -->
    <div class="news__main-post">
        <div class="news__main-post-image">
            <?php if ($picture = $arItem['PREVIEW_PICTURE']): ?>
                <? $file = CFile::ResizeImageGet($picture['ID'], array('width' => 438, 'height' => 438), BX_RESIZE_IMAGE_EXACT, true); ?>
                <img src="<?= $file['src'] ?>"
                     alt="<?= htmlspecialcharsbx($arItem["NAME"]) ?>"/>
            <?php endif ?>
            <div class="news__main-post-date"><?= $arItem['DISPLAY_ACTIVE_FROM']?></div>
        </div>
        <div class="news__main-post-content">
            <div class="news__main-post-title"><?= $arItem['NAME'] ?></div>
            <p class="news__main-post-text"><?= $arItem['PREVIEW_TEXT'] ?></p>
            <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="news__main-post-link">Смотреть</a>
        </div>
    </div>
    <div class="news__content">
    <?php endif ?>
<?php endforeach ?>
</div><!-- news__content-->
<?=$arResult['NAV_STRING']?>

