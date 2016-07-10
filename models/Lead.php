<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lead".
 *
 * @property integer $lead_id
 * @property string $name
 * @property string $email
 * @property string $skype
 * @property string $contact_no
 * @property string $note
 * @property string $date_added
 */
class Lead extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lead';
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
            'lead_id' => Yii::t('app', 'Lead ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'skype' => Yii::t('app', 'Skype'),
            'contact_no' => Yii::t('app', 'Contact No'),
            'note' => Yii::t('app', 'Note'),
            'date_added' => Yii::t('app', 'Date Added'),
        ];
    }

    /**
     * @inheritdoc
     * @return LeadQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LeadQuery(get_called_class());
    }
}
