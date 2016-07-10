<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Password]].
 *
 * @see Password
 */
class PasswordQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Password[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Password|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}