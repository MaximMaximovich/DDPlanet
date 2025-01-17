<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

// поключаем модуль инфоблоков
\Bitrix\Main\Loader::includeModule('iblock');
$server = \Bitrix\Main\Context::getCurrent()->getServer();
$request = \Bitrix\Main\Context::getCurrent()->getRequest();

$arResult = array('status' => false); // переменная для результата
$err = 0; // счётчик ошибок
$PROP = array(); // данные для полей элемента инфоблока

$validInput = htmlspecialcharsbx($request->getPost('valid-input'));
$formName = htmlspecialcharsbx($request->getPost('form-name'));
$email = trim(htmlspecialcharsbx($request->getPost('email')));

// АНТИСПАМ
// Если поле антиспам не пусто - прекращаем выполнение скрипта
if (!empty($validInput)) {
    die();
}

// E-mail
if (!empty($email)) {
    $PROP['EMAIL'] = $email;
} else {
    $err++;
}

// имя формы обратной связи
if (!empty($formName)) {
    switch ($formName) {
        case "mail-feedback":
            $PROP['FORM_NAME'] = "MAILING FORM";
            if (empty($email))
                $err++;
            break;
        default:
            $err++;
    }
} else {
    $err++;
}

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH'])
    && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && $err == 0) {

    // устанавливаем статус
    $arResult['status'] = "ok";
    $arResult['msg'][] = array(
        'text' => 'Your data has been successfully sent!',
        'type' => true
    );

    $arFields = array(
        "IBLOCK_SECTION_ID" => false, // элемент лежит в корне раздела
        "IBLOCK_ID" => \DDPlanet\Helper::getIblockIdByCode('mailing'),
        'ACTIVE' => 'Y',
        'NAME' => $PROP['FORM_NAME'] . ' - ' . $PROP['EMAIL'],
        'CODE' => Cutil::translit($PROP['FORM_NAME'] . ' - ' . $PROP['EMAIL'], "ru", array("replace_space" => "_", "replace_other" => "_")),
        'PROPERTY_VALUES' => $PROP,
    );

    // записываем данные формы в инфоблок
    $el = new \CIBlockElement();
    $itemId = $el->Add($arFields);

    // подготавливаем поля для почтового события
    $arEventFields = array(
        'FORM_NAME' => $PROP['FORM_NAME'],
        'CUSTOMER_EMAIL' => $PROP['EMAIL'],
    );

    // отправка почты
    CEvent::Send("MAILING_FORM", "s1", $arEventFields, "Y", ID_MAILING_FORM_TEMPLATE);

} else {
    $arResult['status'] = 'error';
}
echo json_encode($arResult);


