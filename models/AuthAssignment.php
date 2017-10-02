<?php

namespace auth\models;

use yii\db\ActiveRecord;

class AuthAssignment extends ActiveRecord
{
    public static function tableName()
    {
        return 'auth_assignment';
    }

    public function rules()
    {
        return [
            [['item_name'], 'string'],
            [['user_id'], 'number'],
            [['created_at'], 'safe']
        ];
    }
}
