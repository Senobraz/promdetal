<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
if(!$arResult["NavShowAlways"])
{
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}
$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>

<div class="news__pagination">
        <?if($arResult["bDescPageNumbering"] === true):?>
        <?else: ?>
            <? if ($arResult["NavPageNomer"] > 1): ?>
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>" class="news__pagination-arrow news__pagination-arrow_prev"></a>
            <? endif ?>

            <?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>
                <?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
                    <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>" class="news__pagination-item news__pagination-item_active"><?=$arResult["nStartPage"]?></a>
                <?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
                    <a href="<?=$arResult["sUrlPath"]?>" class="news__pagination-item"><?=$arResult["nStartPage"]?></a>
                <?else:?>
                    <a href="?PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>" class="news__pagination-item"><?=$arResult["nStartPage"]?></a>
                <?endif?>
                <?$arResult["nStartPage"]++?>
            <?endwhile?>

            <? if($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>" class="news__pagination-arrow news__pagination-arrow_next"></a>
            <? endif ?>
        <?endif?>
</div>