<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Lead]].
 *
 * @see Lead
 */
class LeadQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Lead[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Lead|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}