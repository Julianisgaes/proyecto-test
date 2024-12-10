<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compras_helados".
 *
 * @property int $id
 * @property int $id_compras
 * @property int $id_helados
 *
 * @property Compras $compras
 * @property Helados $helados
 */
class ComprasHelados extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'compras_helados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_compras', 'id_helados'], 'required', 'message' => 'Campo requerido.'],
            [['id_compras', 'id_helados'], 'integer'],
            [['id_compras'], 'exist', 'skipOnError' => true, 'targetClass' => Compras::class, 'targetAttribute' => ['id_compras' => 'id']],
            [['id_helados'], 'exist', 'skipOnError' => true, 'targetClass' => Helados::class, 'targetAttribute' => ['id_helados' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_compras' => 'Id Compras',
            'id_helados' => 'Id Helados',
        ];
    }

    /**
     * Gets query for [[Compras]].
     *
     * @return \yii\db\ActiveQuery|ComprasQuery
     */
    public function getCompras()
    {
        return $this->hasOne(Compras::class, ['id' => 'id_compras']);
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
     * {@inheritdoc}
     * @return ComprasHeladosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ComprasHeladosQuery(get_called_class());
    }
}
