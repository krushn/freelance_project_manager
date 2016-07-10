<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Note]].
 *
 * @see Note
 */
class NoteQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Note[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Note|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}