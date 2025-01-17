<?php

namespace DDPlanet;

class Helper
{
    static function getIblockIdByCode(string $iblockCode, int $cacheTime = 86400000): int
    {
        \Bitrix\Main\Loader::includeModule('iblock');

        $iblock = \Bitrix\Iblock\IblockTable::getList([
            'filter' => [
                '=CODE' => $iblockCode
            ],
            'select' => ['ID'],
            'limit' => 1,
            'cache' => [
                'ttl' => $cacheTime
            ]
        ])->fetch();

        return ($iblock['ID'] > 0) ? $iblock['ID'] : 0;
    }

}
