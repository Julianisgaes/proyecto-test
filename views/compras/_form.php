<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\Compras $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="compras-form">

    <p class="alert alert-warning">Al finalizar este formulario, no se olvide de crear un registro relacionado a este en la página <?= Html::a('"Base de datos/Compras Helados"', ['compras-helados/index'], ['target' => '_blank']) ?>.</p>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha')->Input('datetime-local') ?>

    <?= $form->field($model, 'venta')->Input('number', [
        'placeholder' => 'Proporcione la cantidad de venta'
    ]) ?>

    <?php

        $clientes = Yii::$app->db->createCommand("SELECT id, CONCAT(nombres, ' ', apellidos) AS nombres_apellidos FROM clientes")->queryAll();

        $clientes = ArrayHelper::map($clientes, 'id', 'nombres_apellidos');

        echo $form->field($model, 'id_clientes')->dropDownList(
            $clientes,
            ['prompt' => 'Seleccione el/los nombre(s) y apellido(s) del cliente']
        )->label('Nombre(s) y apellido(s)')

    ?>

    <div class="form-group mt-2">
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
