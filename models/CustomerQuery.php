<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Customer]].
 *
 * @see Customer
 */
class CustomerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Customer[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Customer|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}