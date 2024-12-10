<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ComprasHelados $model */

$this->title = 'Actualizar registro de Compras Helados: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Compras Helados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compras-helados-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
