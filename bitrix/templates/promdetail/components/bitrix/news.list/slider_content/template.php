<?// if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?// $this->setFrameMode(true); ?>
<div class="inner-slider-block">
    <div id="carousel-example-generic" data-ride="carousel" class="carousel inner-slide slide">
        <!-- Wrapper for slides-->
        <div role="listbox" class="carousel-inner">
            <?php $i = 0;
            foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="item <?= $i == 0 ? 'active ' : ''?>">
                <div class="quote-block clearfix">
                    <div class="person-block">
                        <div class="photo">
                            <?php if ($picture = $arItem['PREVIEW_PICTURE']): ?>
                                <? $file = CFile::ResizeImageGet($picture['ID'], array('width' => 75, 'height' => 75), BX_RESIZE_IMAGE_EXACT, true); ?>
                                <img src="<?= $file['src'] ?>" alt="<?= htmlspecialcharsbx($arItem["NAME"]) ?>"
                                     alt="<?= htmlspecialcharsbx($arItem["NAME"]) ?>"/>
                            <?php endif ?>
                        </div>
                        <div class="name"><?= $arItem['NAME'] ?></div>
                        <div class="position"><?= $arItem['PROPERTIES']['JOB']['VALUE'] ?></div>
                        <?php if ($arItem['PROPERTIES']['LINK']['VALUE']) : ?>
                        <a href="<?= $arItem['PROPERTIES']['LINK']['VALUE'] ?>" class="btn btn-transparent">подробнее</a>
                        <?php endif ?>
                    </div>
                    <div class="quote ov">
                        <div class="inner"><?= nl2br($arItem['PREVIEW_TEXT']) ?></div>
                    </div>
                </div>
            </div>
            <?php $i++; endforeach ?>
        </div>
        <!-- Indicators-->
        <ol class="carousel-indicators">
            <?php $i = 0;
            foreach ($arResult["ITEMS"] as $arItem): ?>
            <li data-target="#carousel-example-generic" data-slide-to="<?= $i ?>" class="<?= $i == 0 ? 'active ' : ''?>"></li>
            <?php $i++; endforeach ?>
        </ol>
    </div>
</div>