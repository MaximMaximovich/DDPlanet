<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="footer__row">
                <div class="footer__col">
                    <div class="footer__logo">
                        <a href="/">
                            <?php $APPLICATION->IncludeFile(
                                "/include/template/header_logo.php",
                                [],
                                ['MODE' => 'html', 'NAME' => GetMessage("EDIT_LOGO_TEXT")]); ?>
                        </a>
                    </div>
                    <div class="footer__copyright">
                        <?php $APPLICATION->IncludeFile(
                            "/include/template/footer_copyright.php",
                            [],
                            ['MODE' => 'html', 'NAME' => GetMessage("EDIT_COPYRIGHT_TEXT")]); ?>
                    </div>
                </div>
                <div class="footer__col">
                    <div class="footer__menu">
                        <ul class="footer__menu-list">
                            <?php $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "bottom",
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "bottom_left",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(""),
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "bottom_left",
                                    "USE_EXT" => "Y"
                                )
                            );?>
                        </ul>
                    </div>
                </div>
                <div class="footer__col">
                    <div class="footer__menu with-active">
                        <ul class="footer__menu-list">
                            <?php $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "bottom",
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "bottom_right",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(""),
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "bottom_right",
                                    "USE_EXT" => "Y"
                                )
                            );?>
                        </ul>
                    </div>
                </div>
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "footer_socials",
                    array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array("CODE", "NAME", ),
                        "FILE_404" => "",
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => \DDPlanet\Helper::getIblockIdByCode('socials'),
                        "IBLOCK_TYPE" => "about",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "10",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "socials",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("LINK"),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "Y",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "Y",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                ); ?>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- CLEANTALK template addon -->
<?php $frame = (new \Bitrix\Main\Page\FrameHelper("cleantalk_frame"))->begin(); if(CModule::IncludeModule("cleantalk.antispam")) echo CleantalkAntispam::FormAddon(); $frame->end(); ?>
<!-- /CLEANTALK template addon -->
</body>
</html>