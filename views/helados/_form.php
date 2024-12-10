<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Helados $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="helados-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sabor')->textInput([
        'maxlength' => true,
        'placeholder' => 'Proporcione el sabor del helado'
    ]) ?>

    <?= $form->field($model, 'stock')->Input('number', [
        'placeholder' => 'Proporcione la cantidad de stock'
    ]) ?>

    <div class="form-group mt-2">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
