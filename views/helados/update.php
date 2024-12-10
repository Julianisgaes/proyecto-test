<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Helados $model */

$this->title = 'Actualizar registro de Helados: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Helados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="helados-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
