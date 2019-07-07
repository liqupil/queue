<?php

namespace tests\common\fixtures;

use yii\test\ActiveFixture;

/**
 * @author V Tikhomirov <vladimir.tikhomirov@kviku.ru>
 */
class ArticleFixture extends ActiveFixture
{
    public $modelClass = 'common\models\Article';
    public $depends = [
        ArticleCategoryFixture::class,
        UserFixture::class,
    ];
}
