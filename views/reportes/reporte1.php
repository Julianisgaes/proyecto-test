<?php
/** @var yii\web\View $this */

use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;

$this->title = 'Ventas totales por sabor de helado';
$this->params['breadcrumbs'][] = ['label' => 'Reportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<p class="alert alert-warning">Nota: al utilizar los filtros de rango, debe asegurarse de llenar los campos de inicio y fin para su correcto funcionamiento.</p>
<div class="card mb-4">
    <div class="card-header">Filtros de búsqueda</div>
    <div class="card-body">
        <?php $form = ActiveForm::begin(['method' => 'get', 'action' => ['reportes/reporte1']]); ?>
        <div class="row">
            <div class="col-md-3">
                <?= Html::label('Inicio del rango de fecha', 'fecha1', ['class' => 'form-label']) ?>
                <?= Html::Input('datetime-local', 'fecha1', Yii::$app->request->get('fecha1', ''), [
                    'class' => 'form-control'
                ]) ?>
            </div>
            <div class="col-md-3">
                <?= Html::label('Fin del rango de fecha', 'fecha2', ['class' => 'form-label']) ?>
                <?= Html::Input('datetime-local', 'fecha2', Yii::$app->request->get('fecha2', ''), [
                    'class' => 'form-control'
                ]) ?>
            </div>
            <div class="col-md-3">
                <?= Html::label('Inicio del rango de venta', 'venta1', ['class' => 'form-label']) ?>
                <?= Html::Input('number', 'venta1', Yii::$app->request->get('venta1', ''), [
                    'class' => 'form-control',
                    'placeholder' => 'Rango de venta inicial'
                ]) ?>
            </div>
            <div class="col-md-3">
                <?= Html::label('Fin del rango de venta', 'venta2', ['class' => 'form-label']) ?>
                <?= Html::Input('number', 'venta2', Yii::$app->request->get('venta2', ''), [
                    'class' => 'form-control',
                    'placeholder' => 'Rango de venta final'
                ]) ?>
            </div>
            <div class="col-md-3 mt-2">
                <?= Html::label('Sabor de helado', 'sabor', ['class' => 'form-label']) ?>
                <?= Html::textInput('sabor', Yii::$app->request->get('sabor', ''), [
                    'class' => 'form-control',
                    'placeholder'  => 'Proporcione el sabor de helado'
                ]) ?>
            </div>
            <div class="mt-3">
                <?= Html::submitButton('Generar reporte', ['class' => 'btn btn-success']) ?>
                <?= Html::resetInput('Reiniciar filtros (antes de generar reporte)', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<?php if (!empty($ventas_totales)): ?>
    <h2 class="mb-3">Resultados del reporte</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Sabor de helado</th>
                    <th scope="col">Ventas Totales</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ventas_totales as $venta_total): ?>
                    <tr class="table-light">
                        <td><?= Html::encode($venta_total['sabor']) ?></td>
                        <td><?= Html::encode($venta_total['venta']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <p class="alert alert-warning">No se encontraron resultados para los filtros seleccionados</p>
<?php endif; ?>