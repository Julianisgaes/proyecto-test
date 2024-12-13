<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Helados;

/** @var yii\web\View $this */
/** @var app\models\ComprasHelados $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="compras-helados-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php

        $fecha_nombres = Yii::$app->db->createCommand("SELECT co.id, CONCAT(co.fecha, ' - ', cl.nombres, ' ', cl.apellidos) AS fecha_nombres FROM compras co INNER JOIN clientes cl ON co.id_clientes = cl.id")->queryAll();

        $fecha_nombres = ArrayHelper::map($fecha_nombres, 'id', 'fecha_nombres');

        echo $form->field($model, 'id_compras')->dropDownList(
            $fecha_nombres,
            ['prompt' => 'Seleccione la fecha de compra y el/los nombre(s) y apellido(s) del cliente que compró']
        )->label('Fecha, nombre(s) y apellido(s)')

    ?>

    <?= $form->field($model, 'id_helados')->dropDownList(
        ArrayHelper::map(Helados::find()->all(), 'id', 'sabor'),
        ['prompt' => 'Seleccione un sabor de helado']
    )->label('Sabor') ?>

    <div class="form-group mt-2">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
