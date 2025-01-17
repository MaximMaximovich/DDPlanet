<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<section class="banner">
    <div class="container">
        <?php if (!empty($arResult["DETAIL_PICTURE"]["SRC"])) : ?>
        <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["NAME"]?>">
        <?php endif; ?>
    </div>
</section>

<section class="artist-body">
    <div class="container">
        <h1><?=$arResult["NAME"]?></h1>
        <div class="artist-body__row">
            <div class="artist-body__text">
                <?=$arResult["DETAIL_TEXT"]?>
            </div>
            <div class="artist-body__social">
                <ul>
                    <?php if (!empty($arResult["PROPERTIES"]["FACEBOOK"]["VALUE"])) : ?>
                    <li>
                        <a href="<?= $arResult["PROPERTIES"]["FACEBOOK"]["VALUE"] ?>" target="_blank">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/docs/img/facebook-ico.svg" alt="Facebook logo">
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if (!empty($arResult["PROPERTIES"]["INSTAGRAM"]["VALUE"])) : ?>
                    <li>
                        <a href="<?= $arResult["PROPERTIES"]["INSTAGRAM"]["VALUE"] ?>" target="_blank">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/docs/img/instagram-ico.svg" alt="Instagram logo">
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if (!empty($arResult["PROPERTIES"]["TWITTER"]["VALUE"])) : ?>
                    <li>
                        <a href="<?= $arResult["PROPERTIES"]["TWITTER"]["VALUE"] ?>" target="_blank">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/docs/img/twitter-ico.svg" alt="Twitter logo">
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if (!empty($arResult["PROPERTIES"]["SPOTIFI"]["VALUE"])) : ?>
                    <li>
                        <a href="<?= $arResult["PROPERTIES"]["SPOTIFI"]["VALUE"] ?>" target="_blank">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/docs/img/spotify-ico.svg" alt="Spotify logo">
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

