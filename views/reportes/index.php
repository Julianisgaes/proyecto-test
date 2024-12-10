<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;

$this->title = 'Reportes';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1 class="mb-3"><?= Html::encode($this->title) ?></h1>

<div class="card-group text-center">
    <div class=card>
        <div class="card-body">
            <h5>Ventas totales por sabor de helado</h5>
            <?= Html::a('Ir al reporte 1', ['reporte1'], ['class' => 'btn btn-success mt-2']) ?>
        </div>
    </div>
    <div class=card>
        <div class="card-body">
            <h5>Compras totales por cliente</h5>
            <?= Html::a('Ir al reporte 2', ['reporte2'], ['class' => 'btn btn-success mt-2']) ?>
        </div>
    </div>
    <div class=card>
        <div class="card-body">
            <h5>Reporte sin contenido</h5>
            <?= Html::a('Ir al reporte 3', ['reporte3'], ['class' => 'btn btn-success mt-2']) ?>
        </div>
    </div>
</div>
