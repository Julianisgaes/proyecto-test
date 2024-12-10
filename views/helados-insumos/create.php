<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\HeladosInsumos $model */

$this->title = 'Crear registro de Helados Insumos';
$this->params['breadcrumbs'][] = ['label' => 'Helados Insumos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="helados-insumos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
