<?php

namespace api\modules\v1\resources;

/**
 * @author V Tikhomirov <vladimir.tikhomirov@kviku.ru>
 */
class User extends \common\models\User
{
    public function fields()
    {
        return ['id', 'username', 'created_at'];
    }

    public function extraFields()
    {
        return ['userProfile'];
    }
}
