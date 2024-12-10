<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\HeladosInsumos $model */

$this->title = 'Actualizar registro de Helados Insumos: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Helados Insumos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="helados-insumos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
