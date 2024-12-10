<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Compras $model */

$this->title = 'Crear registro de Compras';
$this->params['breadcrumbs'][] = ['label' => 'Compras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compras-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
