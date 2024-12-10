<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Insumos $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="insumos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput([
        'maxlength' => true,
        'placeholder' => 'Proporcione el nombre del insumo'
    ]) ?>

    <?= $form->field($model, 'stock')->Input('number', [
        'placeholder' => 'Proporcione la cantidad de stock'
    ]) ?>

    <div class="form-group mt-2">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
