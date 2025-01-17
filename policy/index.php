<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("policies");
$APPLICATION->SetPageProperty('title', 'Privacy policies');
?>
<section class="welcome">
    <div class="container">
    <h1><?php $APPLICATION->ShowProperty('title')?></h1>
    <p><?= 'Privacy policies will be posted here.' ?></p>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>