<?php

namespace tests\common\fixtures;

use yii\test\ActiveFixture;

/**
 * @author V Tikhomirov <vladimir.tikhomirov@kviku.ru>
 */
class ArticleAttachmentFixture extends ActiveFixture
{
    public $modelClass = 'common\models\ArticleAttachment';
    public $depends = [
        ArticleFixture::class
    ];
}
