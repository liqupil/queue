<?php
/**
 * @author V Tikhomirov <vladimir.tikhomirov@kviku.ru>
 */
return [
    'class'=>'yii\web\UrlManager',
    'enablePrettyUrl'=>true,
    'showScriptName'=>false,
    'rules'=> [
        ['pattern'=>'cache/<path:(.*)>', 'route'=>'glide/index', 'encodeParams' => false]
    ]
];
