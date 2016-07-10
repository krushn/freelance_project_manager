<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%password}}".
 *
 * @property integer $password_id
 * @property string $website
 * @property string $type
 * @property string $data
 */
class Password extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%password}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['website', 'type', 'data'], 'required'],
            [['type', 'data'], 'string'],
            [['website'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'password_id' => 'Password ID',
            'website' => 'Website',
            'type' => 'Type',
            'data' => 'Data',
        ];
    }

    /**
     * @inheritdoc
     * @return PasswordQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PasswordQuery(get_called_class());
    }
}
