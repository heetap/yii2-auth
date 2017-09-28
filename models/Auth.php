<?php

namespace auth\models;

use yii\db\ActiveRecord;

/**
 * Class Auth
 *
 * @property int $id
 * @property int $user_id
 * @property string $source
 * @property string $source_id
 *
 * @package auth\models
 */
class Auth extends ActiveRecord
{
    public static function tableName()
    {
        return 'auth';
    }

    public function rules()
    {
        return [
            [['user_id'], 'number'],
            [['source', 'source_id'], 'string']
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
