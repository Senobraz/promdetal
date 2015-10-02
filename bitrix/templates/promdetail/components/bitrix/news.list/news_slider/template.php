<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? $this->setFrameMode(true); ?>
<?php if($arResult["SLIDER"]) : ?>
<div class="news__top-slider-wrap">
    <div class="news__top-slider">
        <div data-ride="carousel" id="carousel-example-generic" class="carousel slide">
            <!-- Wrapper for slides-->
            <div role="listbox" class="carousel-inner">
                <?php $i = 0;
                foreach ($arResult["SLIDER"] as $arItem): ?>
                <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="item <?= $i == 0 ? 'active' : '' ?> news__top-slider-item">
                    <div class="news__top-slider-left">
                        <?php if ($picture = $arItem['PREVIEW_PICTURE']): ?>
                            <? $file = CFile::ResizeImageGet($picture['ID'], array('width' => 540, 'height' => 265), BX_RESIZE_IMAGE_EXACT, true); ?>
                            <img src="<?= $file['src'] ?>"
                                 alt="<?= htmlspecialcharsbx($arItem["NAME"]) ?>"/>
                        <?php endif ?>
                        <div class="news__top-slider-left-content">
                            <div class="news__top-slider-left-content-title"><?= $arItem['NAME'] ?></div>
                            <div class="news__top-slider-left-content-date"><?=$arItem['DISPLAY_ACTIVE_FROM']?></div>
                        </div>
                    </div>
                    <div class="news__top-slider-right">
                        <p><?= nl2br($arItem['PREVIEW_TEXT'])?></p>
                        <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="news__top-slider-more">Смотреть</a>
                    </div>
                </div>
               <?php $i++; endforeach ?>
            </div>
            <!-- Indicators-->
            <ol class="carousel-indicators">
                <?php $i = 0;
                foreach ($arResult["SLIDER"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?= $i ?>" class="<?= $i == 0 ? 'active' : '' ?>"></li>
                <?php $i++; endforeach ?>
            </ol>
        </div>
    </div>
</div>
<?php endif ?>