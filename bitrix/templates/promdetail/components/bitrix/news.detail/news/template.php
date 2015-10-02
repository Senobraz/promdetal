<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php $this->setFrameMode(true); ?>
<?php
    $imgDetail = $arResult['DETAIL_PICTURE'] ?: $arResult['PREVIEW_PICTURE'];
?>
<div class="news__page js-new-detail">
    <div class="news__page-top"><?=$arResult["NAME"]?></div>
    <div class="news__page-content-block">
        <?php if ($picture = $imgDetail): ?>
            <? $file = CFile::ResizeImageGet($picture['ID'], array('width' => 320, 'height' => 398), BX_RESIZE_IMAGE_PROPORTIONAL, true); ?>
            <img src="<?= $file['src'] ?>"
                 class="news__page-content-image"
                 alt="<?= htmlspecialcharsbx($arItem["NAME"]) ?>"/>
        <?php endif ?>

        <div class="news__page-content">
            <div class="news__page-content-date"><?=$arResult['DISPLAY_ACTIVE_FROM']?></div>
            <div class="news__page-content-text">
                <?=$arResult["DETAIL_TEXT"]?>
            </div>
            <a href="<?= $arParams["DETAIL_PAGE_LIST"] ?>" class="news__page-content-link">Назад к новостям</a>
        </div>
    </div>