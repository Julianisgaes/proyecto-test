<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;

$this->title = 'Reportes';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1 class="mb-3"><?= Html::encode($this->title) ?></h1>

<div class="card-group text-center">
    <div class=card>
        <img src="<?= Yii::getAlias('@web' . '/media/reporte-1.jpg') ?>" class="card-img-top img-fluid px-3 py-3" alt="reporte 1">
        <div class="card-body">
            <h5>Ventas totales por sabor de helado</h5>
            <?= Html::a('Ir al reporte 1', ['reporte1'], ['class' => 'btn btn-success mt-2 mb-3']) ?>
        </div>
    </div>
    <div class=card>
        <img src="<?= Yii::getAlias('@web' . '/media/reporte-2.jpg') ?>" class="card-img-top img-fluid px-3 py-3" alt="reporte 2">
        <div class="card-body">
            <h5>Compras totales por cliente</h5>
            <?= Html::a('Ir al reporte 2', ['reporte2'], ['class' => 'btn btn-success mt-2 mb-3']) ?>
        </div>
    </div>
    <div class=card>
        <img src="<?= Yii::getAlias('@web' . '/media/reporte-3.jpg') ?>" class="card-img-top img-fluid px-3 py-3" alt="reporte 3">
        <div class="card-body">
            <h5>Insumos requeridos por helado</h5>
            <?= Html::a('Ir al reporte 3', ['reporte3'], ['class' => 'btn btn-success mt-2 mb-3']) ?>
        </div>
    </div>
</div>
