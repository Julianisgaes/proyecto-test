<?php
/** @var yii\web\View $this */

use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;

$this->title = 'Insumos requeridos por sabor de helado';
$this->params['breadcrumbs'][] = ['label' => 'Reportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<div class="card mb-4">
  <div class="card-header">Filtros de búsqueda</div>
  <div class="card-body">
    <?php $form = ActiveForm::begin(['method' => 'get', 'action' => ['reportes/reporte3']]); ?>
    <div class="row">
      <div class="col-md-4">
        <?= Html::label('Sabor de helado', 'sabor', ['class' => 'form-label']) ?>
        <?= Html::textInput('sabor', Yii::$app->request->get('sabor', ''), [
          'class' => 'form-control',
          'placeholder' => 'Proporcione el sabor de helado'
        ]) ?>
      </div>
      <div class="col-md-4">
        <?= Html::label('Nombre de insumo', 'insumo', ['class' => 'form-label']) ?>
        <?= Html::textInput('insumo', Yii::$app->request->get('insumo', ''), [
          'class' => 'form-control',
          'placeholder' => 'Proporcione el nombre de insumo'
        ]) ?>
      </div>
      <div class="col-md-4 d-flex align-items-end mt-3">
        <?= Html::submitButton('Generar reporte', ['class' => 'btn btn-success']) ?>
      </div>
      <div class="col-md-4 mt-3">
        <?= Html::resetInput('Reiniciar filtros (antes de generar reporte)', ['class' => 'btn btn-success']) ?>
      </div>
    </div>
    <?php ActiveForm::end(); ?>
  </div>
</div>
<?php if (!empty($insumos_helados)): ?>
  <h2 class="mb-3">Resultados del reporte</h2>
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">Sabor de helado</th>
          <th scope="col">Nombre de insumo</th>
          <th scope="col">Stock de insumo</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($insumos_helados as $insumo_helado): ?>
          <tr class="table-light">
            <td><?= Html::encode($insumo_helado['sabor']) ?></td>
            <td><?= Html::encode($insumo_helado['nombre']) ?></td>
            <td><?= Html::encode($insumo_helado['stock']) ?></td>
        <?php endforeach; ?>
          </tr>
      </tbody>
    </table>
  </div>
<?php else: ?>
  <p class="alert alert-warning">No se encontraron resultados para los filtros seleccionados</p>
<?php endif; ?>