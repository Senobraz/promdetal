<?php

$newsSlider = array();
$news = array();

foreach ($arResult["ITEMS"] as $arItem) {
    if ($arItem['PROPERTIES']['FSLIDER']['VALUE']){
        $newsSlider[] =  $arItem;
    } else {
        $news[] = $arItem;
    }
}

$arResult["SLIDER"] = $newsSlider;