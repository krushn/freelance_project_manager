<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ProjectTasks]].
 *
 * @see ProjectTasks
 */
class ProjectTasksQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return ProjectTasks[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ProjectTasks|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}