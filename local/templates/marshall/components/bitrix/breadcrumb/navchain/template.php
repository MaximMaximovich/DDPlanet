<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

//delayed function must return a string
if (empty($arResult))
    return "";

$strReturn = '';

$strReturn .= '<div class="breadcrumbs__list">';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex(ucfirst(Cutil::translit($arResult[$index]["TITLE"], "ru", array("replace_space" => " ", "replace_other" => " "))));

    if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
        $strReturn .= '<a href="' . $arResult[$index]["LINK"] . '" class="breadcrumbs__item">' . $title . '</a>';
    } else {
        $strReturn .= '<div class="breadcrumbs__item breadcrumbs__item-active">' . $title . '</div>';
    }
}

$strReturn .= '</div>';

return $strReturn;