<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "note".
 *
 * @property integer $note_id
 * @property string $note
 */
class Note extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'note';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['note'], 'required'],
            [['note'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'note_id' => 'Note ID',
            'note' => 'Note',
        ];
    }

    /**
     * @inheritdoc
     * @return NoteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NoteQuery(get_called_class());
    }
}
