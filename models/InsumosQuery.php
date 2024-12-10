<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Insumos]].
 *
 * @see Insumos
 */
class InsumosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Insumos[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Insumos|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
