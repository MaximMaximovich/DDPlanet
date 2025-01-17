<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Marshall main');
$APPLICATION->SetPageProperty('title', 'MAKING MUSIC <br>WITH MARSHALL');
$APPLICATION->SetPageProperty('keywords', 'music, marshall');
$APPLICATION->SetPageProperty('description', 'We’re helping you learn music');
?>

<section class="welcome">
    <div class="container">
        <h1><?php $APPLICATION->ShowProperty('title')?></h1>

        <?php
        $APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"main_page", 
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_ELEMENT_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "BROWSER_TITLE" => "-",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "N",
                "DISPLAY_PICTURE" => "N",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "ELEMENT_CODE" => "making-music-with-marshall",
                "ELEMENT_ID" => "",
                "FIELD_CODE" => array(
                    0 => "ID",
                    1 => "CODE",
                    2 => "NAME",
                    3 => "DETAIL_TEXT",
                    4 => "DETAIL_PICTURE",
                    5 => "",
                ),
                "IBLOCK_ID" => \DDPlanet\Helper::getIblockIdByCode("pages_content"),
                "IBLOCK_TYPE" => "content",
                "IBLOCK_URL" => "",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "MESSAGE_404" => "",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Страница",
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "N",
                "SET_CANONICAL_URL" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "STRICT_SECTION_CHECK" => "N",
                "USE_PERMISSIONS" => "N",
                "USE_SHARE" => "N",
                "COMPONENT_TEMPLATE" => "main_page",
                "DISPLAY_EXPLORE_BUTTON" => "Y",
                "EXPLORE_BUTTON_TEXT" => "explore",
                "EXPLORE_BUTTON_LINK" => "/artists/"
            ),
            false
        );
        ?>
        <a href="#mailing" class="arrow-down" ><img src="<?=SITE_TEMPLATE_PATH?>/docs/img/arrow-down.svg" alt="Down"></a>
    </div>
</section>

<section class="mailing" id="mailing">
    <div class="container">
        <div class="mailing__wrap">
            <div class="mailing__title">
                <?php $APPLICATION->IncludeFile(
                    '/include/mailing/mailing_title.php',
                    [], ['MODE' => 'html']); ?>
            </div>
            <div class="mailing__desc">
                <?php $APPLICATION->IncludeFile(
                    '/include/mailing/mailing_desc.php',
                    [], ['MODE' => 'html']); ?>
            </div>
            <form id="mail-feedback" action="POST" class="mailing__form">
                <input
                        id="emailInput"
                        type="text"
                        placeholder="your email"
                        name="email"
                        class="mailing__input"
                        required
                        data-parsley-required-message="The field must be filled in"
                        data-parsley-type="email"
                        data-parsley-errors-container="#parsley_error">
                <input type="submit" value="subscribe" class="mailing__submit">
                <div style="display:none;">
                    <input type="text" name="form-name" value="mail-feedback">
                    <input type="text" name="valid-input" value="">
                </div>
                <div class="mailing__agree">
                    <?php $APPLICATION->IncludeFile(
                        '/include/mailing/mailing_agree.php',
                        [], ['MODE' => 'html']); ?>
                </div>
                <div class="mailing__agree" id="parsley_error" style="color: red"></div>
            </form>
        </div>
    </div>
</section>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>