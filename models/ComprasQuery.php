<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Compras]].
 *
 * @see Compras
 */
class ComprasQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Compras[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Compras|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
