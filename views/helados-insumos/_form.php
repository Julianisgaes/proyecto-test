<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Helados;
use app\models\Insumos;

/** @var yii\web\View $this */
/** @var app\models\HeladosInsumos $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="helados-insumos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_helados')->dropDownList(
        ArrayHelper::map(Helados::find()->all(), 'id', 'sabor'),
        ['prompt' => 'Seleccione un sabor de helado']
    )->label('Sabor') ?>

    <?= $form->field($model, 'id_insumos')->dropDownList(
        ArrayHelper::map(Insumos::find()->all(), 'id', 'nombre'),
        ['prompt' => 'Seleccione un nombre de insumo']
    )->label('Nombre') ?>

    <div class="form-group mt-2">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
