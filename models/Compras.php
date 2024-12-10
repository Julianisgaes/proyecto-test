<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compras".
 *
 * @property int $id
 * @property string $fecha
 * @property int $venta
 * @property int $id_clientes
 *
 * @property Clientes $clientes
 * @property ComprasHelados[] $comprasHelados
 */
class Compras extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'compras';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha', 'venta', 'id_clientes'], 'required', 'message' => 'Campo requerido.'],
            [['fecha'], 'safe'],
            [['venta', 'id_clientes'], 'integer'],
            [['id_clientes'], 'exist', 'skipOnError' => true, 'targetClass' => Clientes::class, 'targetAttribute' => ['id_clientes' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fecha' => 'Fecha',
            'venta' => 'Venta',
            'id_clientes' => 'Id Clientes',
        ];
    }

    /**
     * Gets query for [[Clientes]].
     *
     * @return \yii\db\ActiveQuery|ClientesQuery
     */
    public function getClientes()
    {
        return $this->hasOne(Clientes::class, ['id' => 'id_clientes']);
    }

    /**
     * Gets query for [[ComprasHelados]].
     *
     * @return \yii\db\ActiveQuery|ComprasHeladosQuery
     */
    public function getComprasHelados()
    {
        return $this->hasMany(ComprasHelados::class, ['id_compras' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return ComprasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ComprasQuery(get_called_class());
    }
}
