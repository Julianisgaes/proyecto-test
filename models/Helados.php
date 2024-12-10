<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "helados".
 *
 * @property int $id
 * @property string $sabor
 * @property int $stock
 *
 * @property ComprasHelados[] $comprasHelados
 * @property HeladosInsumos[] $heladosInsumos
 */
class Helados extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'helados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sabor', 'stock'], 'required', 'message' => 'Campo requerido.'],
            [['stock'], 'integer'],
            [['sabor'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sabor' => 'Sabor',
            'stock' => 'Stock',
        ];
    }

    /**
     * Gets query for [[ComprasHelados]].
     *
     * @return \yii\db\ActiveQuery|ComprasHeladosQuery
     */
    public function getComprasHelados()
    {
        return $this->hasMany(ComprasHelados::class, ['id_helados' => 'id']);
    }

    /**
     * Gets query for [[HeladosInsumos]].
     *
     * @return \yii\db\ActiveQuery|HeladosInsumosQuery
     */
    public function getHeladosInsumos()
    {
        return $this->hasMany(HeladosInsumos::class, ['id_helados' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return HeladosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HeladosQuery(get_called_class());
    }
}
