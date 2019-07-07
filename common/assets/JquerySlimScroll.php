<?php

namespace common\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class JquerySlimScroll
 * @package common\assets
 * @author V Tikhomirov <vladimir.tikhomirov@kviku.ru>
 */
class JquerySlimScroll extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@npm/jquery-slimscroll';
    /**
     * @var array
     */
    public $js = [
        'jquery.slimscroll.min.js'
    ];
    /**
     * @var array
     */
    public $depends = [
        JqueryAsset::class
    ];
}
