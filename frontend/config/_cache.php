<?php
/**
 * @author V Tikhomirov <vladimir.tikhomirov@kviku.ru>
 */

$cache = [
    'class' => 'yii\caching\FileCache',
    'cachePath' => '@frontend/runtime/cache'
];

if (YII_ENV_DEV) {
    $cache = [
        'class' => 'yii\caching\DummyCache'
    ];
}

return $cache;
