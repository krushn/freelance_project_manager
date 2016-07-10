<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $customer_id
 * @property string $name
 * @property string $email
 * @property string $skype
 * @property string $contact_no
 * @property string $note
 * @property string $date_added
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'date_added'], 'required'],
            [['note'], 'string'],
            [['date_added'], 'safe'],
            [['name', 'email'], 'string', 'max' => 250],
            [['skype'], 'string', 'max' => 100],
            [['contact_no'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'customer_id' => 'Customer ID',
            'name' => 'Name',
            'email' => 'Email',
            'skype' => 'Skype',
            'contact_no' => 'Contact No',
            'note' => 'Note',
            'date_added' => 'Date Added',
        ];
    }
}
