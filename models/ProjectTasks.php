<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project_tasks".
 *
 * @property integer $project_task_id
 * @property integer $project_id
 * @property string $name
 * @property string $start_time
 * @property string $end_time
 * @property string $note
 */
class ProjectTasks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_tasks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_id', 'name'], 'required'],
            [['project_id'], 'integer'],
            [['start_time', 'end_time'], 'safe'],
            [['note'], 'string'],
            [['name'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'project_task_id' => 'Project Task ID',
            'project_id' => 'Project ID',
            'name' => 'Name',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'note' => 'Note',
        ];
    }

    /**
     * @inheritdoc
     * @return ProjectTasksQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProjectTasksQuery(get_called_class());
    }
}
