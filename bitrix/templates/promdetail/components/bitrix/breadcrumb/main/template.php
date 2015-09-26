<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
//delayed function must return a string
if (empty($arResult))
    return 'Главная';

$strReturn = '<a href="' . SITE_DIR . '">Главная</a><span class="sep">|</span>';
$num_items = count($arResult);
for ($index = 0, $itemSize = $num_items; $index < $itemSize; $index++) {
    $title = htmlspecialcharsbx($arResult[$index]["TITLE"]);

    if ($arResult[$index]["LINK"] <> "" && $index < (count($arResult) - 1))
        $strReturn .= '<a href="' . $arResult[$index]["LINK"] . '">' . $title . '</a><span class="sep">|</span>';
    else
        $strReturn .= '<span>' . $title . '</span>';
}
return $strReturn;
?>