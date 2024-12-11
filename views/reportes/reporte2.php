<?php
/** @var yii\web\View $this */

use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;

$this->title = 'Compras totales por cliente';
$this->params['breadcrumbs'][] = ['label' => 'Reportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<p class="alert alert-warning">Nota: al utilizar los filtros de rango, debe asegurarse de llenar los campos de inicio y fin para su correcto funcionamiento.</p>
<div class="card mb-4">
    <div class="card-header">Filtros de búsqueda</div>
    <div class="card-body">
        <?php $form = ActiveForm::begin(['method' => 'get', 'action' => ['reportes/reporte2']]); ?>
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
                <?= Html::label('Inicio del rango de compra', 'compra1', ['class' => 'form-label']) ?>
                <?= Html::Input('number', 'compra1', Yii::$app->request->get('compra1', ''), [
                    'class' => 'form-control',
                    'placeholder' => 'Rango de compra inicial'
                ]) ?>
            </div>
            <div class="col-md-3">
                <?= Html::label('Fin del rango de compra', 'compra2', ['class' => 'form-label']) ?>
                <?= Html::Input('number', 'compra2', Yii::$app->request->get('compra2', ''), [
                    'class' => 'form-control',
                    'placeholder' => 'Rango de compra final'
                ]) ?>
            </div>
            <div class="col-md-4 mt-2">
                <?= Html::label('Nombre(s) de cliente', 'nombres', ['class' => 'form-label']) ?>
                <?= Html::textInput('nombres', Yii::$app->request->get('nombres', ''), [
                    'class' => 'form-control',
                    'placeholder'  => 'Proporcione el/los nombre(s) del cliente'
                ]) ?>
            </div>
            <div class="col-md-4 mt-2">
                <?= Html::label('Apellido(s) de cliente', 'apellidos', ['class' => 'form-label']) ?>
                <?= Html::textInput('apellidos', Yii::$app->request->get('apellidos', ''), [
                    'class' => 'form-control',
                    'placeholder'  => 'Proporcione el/los apellido(s) del cliente'
                ]) ?>
            </div>
            <div class="mt-3">
                <?= Html::submitButton('Generar reporte', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<?php if (!empty($compras_totales)): ?>
    <h2 class="mb-3">Resultados del reporte</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Nombre(s) del cliente</th>
                    <th scope="col">Apellido(s) del cliente</th>
                    <th scope="col">Compras totales</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($compras_totales as $compra_total): ?>
                    <tr class="table-light">
                        <td><?= Html::encode($compra_total['nombres']) ?></td>
                        <td><?= Html::encode($compra_total['apellidos']) ?></td>
                        <td><?= Html::encode($compra_total['compra']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <p class="alert alert-warning">No se encontraron resultados para los filtros seleccionados</p>
<?php endif; ?>