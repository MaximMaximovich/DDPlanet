<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

global $APPLICATION;
IncludeTemplateLangFile(__FILE__);
use Bitrix\Main\Page\Asset;

?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <?php
    CJSCore::Init(array("ajax"));
    CJSCore::Init(array("jquery"));
    $APPLICATION->ShowHead();
    Asset::getInstance()->addString('<meta charset="UTF-8" />');
    Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge" />');
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
    Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">');
    Asset::getInstance()->addString('<link rel="icon" type="image/x-icon" href="' . SITE_TEMPLATE_PATH . '/docs/img/favicon.ico" />');

    //css
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/docs/css/style.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/docs/css/custom.css');
    //js
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/docs/js/libs/jquery3.6.1.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/docs/js/libs/parsley.min.js');
    if (LANGUAGE_ID == "en") {
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/docs/js/libs/parsley_en.js');
    }
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/docs/js/script.js");
    ?>
    <title><?php $APPLICATION->ShowTitle(false) ?></title>
</head>
<body>
<div id="panel">
    <?php $APPLICATION->ShowPanel();?>
</div>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__row header__row-custom">
                <div class="header__logo header__logo-custom">
                    <a href="/">
                        <?php $APPLICATION->IncludeFile(
                            "/include/template/header_logo.php",
                            [],
                            ['MODE' => 'html', 'NAME' => GetMessage("EDIT_LOGO_TEXT")]); ?>
                    </a>
                </div>
                <nav class="header__nav with-active">
                    <ul class="header__nav-list" >
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "top",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "top",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "Y"
                        )
                    );?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="main">
        <?php
        if ($APPLICATION->GetCurPage(false) != '/' && CHTTP::GetLastStatus() != "404 Not Found") :
        ?>
            <section class="breadcrumbs">
                <div class="container">
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:breadcrumb",
                        "navchain",
                        array(
                            "PATH" => "",
                            "SITE_ID" => "s1",
                            "START_FROM" => "0"
                        )
                    ); ?>
                </div>
            </section>
        <?php endif; ?>
	
						