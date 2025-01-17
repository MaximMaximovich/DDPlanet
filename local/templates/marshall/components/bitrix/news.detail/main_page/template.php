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
<div class="welcome__row">
    <div class="welcome__text">

        <?= $arResult["DETAIL_TEXT"] ?>

        <?php  if (($arParams["DISPLAY_EXPLORE_BUTTON"] == "Y") && !empty($arParams["EXPLORE_BUTTON_TEXT"])) : ?>
        <a href="<?= $arParams["EXPLORE_BUTTON_LINK"] ?>" class="empty-btn"><?= $arParams["EXPLORE_BUTTON_TEXT"] ?></a>
        <?php endif; ?>

    </div>
    <div class="welcome__img">
        <?php  if (!empty($arResult["DETAIL_PICTURE"]["SRC"])) : ?>
        <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="welcome picture">
        <?php endif; ?>
    </div>
</div>