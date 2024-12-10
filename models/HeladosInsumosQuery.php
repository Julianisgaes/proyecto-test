<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[HeladosInsumos]].
 *
 * @see HeladosInsumos
 */
class HeladosInsumosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return HeladosInsumos[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return HeladosInsumos|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
