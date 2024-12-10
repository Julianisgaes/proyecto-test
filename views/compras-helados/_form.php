<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Compras;
use app\models\Helados;

/** @var yii\web\View $this */
/** @var app\models\ComprasHelados $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="compras-helados-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_compras')->dropDownList(
        ArrayHelper::map(Compras::find()->all(), 'id', 'fecha'),
        ['prompt' => 'Seleccione una fecha']
    )->label('Fecha') ?>

    <?= $form->field($model, 'id_helados')->dropDownList(
        ArrayHelper::map(Helados::find()->all(), 'id', 'sabor'),
        ['prompt' => 'Seleccione un sabor de helado']
    )->label('Sabor') ?>

    <div class="form-group mt-2">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
