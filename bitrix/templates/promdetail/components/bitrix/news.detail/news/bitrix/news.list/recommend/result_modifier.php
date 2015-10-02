<?php

/**
 * @todo php 5.3.2 - array_search не ищет в 0 индексе массива
 */
foreach ($arParams['OFFERS']['VALUE'] as $item) {
    $recommendList['_' . $item] = $item;
}

$newItems = array();
foreach ($arResult['ITEMS'] as $arItem) {
    if (array_search($arItem['ID'], $recommendList)) {
        $newItems[] = $arItem;
    }
}

$arResult['ITEMS'] = $newItems;
?>