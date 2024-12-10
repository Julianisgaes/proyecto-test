<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Clientes $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="clientes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'apellidos')->textInput([
        'maxlength' => true,
        'placeholder' => 'Proporcione el/los apellido(s) del cliente'
    ])->label('Apellido(s)') ?>

    <?= $form->field($model, 'nombres')->textInput([
        'maxlength' => true,
        'placeholder' => 'Proporcione el/los nombre(s) del cliente'
    ])->label('Nombre(s)') ?>

    <div class="form-group mt-2">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
