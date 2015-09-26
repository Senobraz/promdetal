<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? $this->setFrameMode(true); ?>
<section class="slider-main">
    <div id="carousel-example-vertical" class="carousel vertical slide">
        <div role="listbox" class="carousel-inner">
            <?php $i = 0;
            foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>"
                     style="background: url('<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>') center center no-repeat;"
                     class="item <?= $i == 0 ? 'active' : '' ?>">
                    <div class="wrap">
                        <div class="promo-block">
                            <div class="title"><?= $arItem['NAME'] ?></div>
                            <div class="text"><?= nl2br($arItem['PREVIEW_TEXT']) ?></div>
                            <?php if ($arItem['PROPERTIES']['LINK']['VALUE']) : ?>
                                <a href="<?= $arItem['PROPERTIES']['LINK']['VALUE'] ?>"
                                   class="btn btn-transparent white">смотреть все</a>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <?php $i++; endforeach ?>
        </div>
        <!-- Controls-->
        <div class="wrap">
            <ol class="carousel-indicators">
                <?php $i = 0;
                foreach ($arResult["ITEMS"] as $arItem): ?>
                    <li data-target="#carousel-example-vertical" data-slide-to="<?= $i ?>"
                        class="<?= $i == 0 ? 'active' : '' ?>"></li>
                    <?php $i++; endforeach ?>
            </ol>
            <div class="control-block">
                <a href="#carousel-example-vertical" role="button" data-slide="prev" class="up carousel-control"><span
                        aria-hidden="true" class="icon icon-up"></span><span class="sr-only">Previous</span></a>
                <a href="#carousel-example-vertical" role="button" data-slide="next" class="down carousel-control"><span
                        aria-hidden="true" class="icon icon-down"></span><span class="sr-only">Next</span></a>
            </div>
        </div>
    </div>
</section>

