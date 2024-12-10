<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "insumos".
 *
 * @property int $id
 * @property string $nombre
 * @property int $stock
 *
 * @property HeladosInsumos[] $heladosInsumos
 */
class Insumos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'insumos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'stock'], 'required', 'message' => 'Campo requerido.'],
            [['stock'], 'integer'],
            [['nombre'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'stock' => 'Stock',
        ];
    }

    /**
     * Gets query for [[HeladosInsumos]].
     *
     * @return \yii\db\ActiveQuery|HeladosInsumosQuery
     */
    public function getHeladosInsumos()
    {
        return $this->hasMany(HeladosInsumos::class, ['id_insumos' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return InsumosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InsumosQuery(get_called_class());
    }
}
