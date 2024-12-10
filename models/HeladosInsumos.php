<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "helados_insumos".
 *
 * @property int $id
 * @property int $id_helados
 * @property int $id_insumos
 *
 * @property Helados $helados
 * @property Insumos $insumos
 */
class HeladosInsumos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'helados_insumos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_helados', 'id_insumos'], 'required', 'message' => 'Campo requerido.'],
            [['id_helados', 'id_insumos'], 'integer'],
            [['id_helados'], 'exist', 'skipOnError' => true, 'targetClass' => Helados::class, 'targetAttribute' => ['id_helados' => 'id']],
            [['id_insumos'], 'exist', 'skipOnError' => true, 'targetClass' => Insumos::class, 'targetAttribute' => ['id_insumos' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_helados' => 'Id Helados',
            'id_insumos' => 'Id Insumos',
        ];
    }

    /**
     * Gets query for [[Helados]].
     *
     * @return \yii\db\ActiveQuery|HeladosQuery
     */
    public function getHelados()
    {
        return $this->hasOne(Helados::class, ['id' => 'id_helados']);
    }

    /**
     * Gets query for [[Insumos]].
     *
     * @return \yii\db\ActiveQuery|InsumosQuery
     */
    public function getInsumos()
    {
        return $this->hasOne(Insumos::class, ['id' => 'id_insumos']);
    }

    /**
     * {@inheritdoc}
     * @return HeladosInsumosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HeladosInsumosQuery(get_called_class());
    }
}
