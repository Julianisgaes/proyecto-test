<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Clientes;

/** @var yii\web\View $this */
/** @var app\models\Compras $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="compras-form">

    <p class="alert alert-warning">Al finalizar este formulario, no se olvide de crear un registro relacionado a este en la página "Base de datos/Compras Helados".</p>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha')->Input('datetime-local') ?>

    <?= $form->field($model, 'venta')->Input('number', [
        'placeholder' => 'Proporcione la cantidad de venta'
    ]) ?>

    <?= $form->field($model, 'id_clientes')->dropDownList(
        ArrayHelper::map(Clientes::find()->all(), 'id', 'nombres'),
        ['prompt' => 'Seleccione el/los nombre(s) del cliente']
    )->label('Nombre(s)') ?>

    <div class="form-group mt-2">
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
