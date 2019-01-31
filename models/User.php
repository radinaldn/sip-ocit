<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_user".
 *
 * @property int $id_user
 * @property string $username
 * @property string $password
 * @property string $level
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'username', 'level'], 'required'],
            [['id_user'], 'integer'],
            [['level'], 'string'],
            [['username'], 'string', 'max' => 100],
            [['username'], 'unique'],
            [['id_user'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'username' => 'Username',
            'password' => 'Password',
            'level' => 'Level',
        ];
    }
}
