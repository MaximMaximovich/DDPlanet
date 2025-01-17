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
?>

<div class="footer__col">
    <div class="footer__social">
    <?php if(!empty($arResult["ITEMS"])) : ?>
    <ul class="footer__social-list">
        <?php foreach($arResult["ITEMS"] as $key => $arItem) : ?>
        <?php
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
            <?php if(!empty($arItem["PROPERTIES"]["LINK"]["VALUE"])) : ?>
            <li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" class="footer__social-link" target="_blank"><?=$arItem["NAME"]?></a>
            </li>
            <?php endif ?>
        <?php endforeach ?>
    </ul>
    <?php endif ?>
    </div>
</div>


