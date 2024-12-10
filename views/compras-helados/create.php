<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ComprasHelados $model */

$this->title = 'Crear registro de Compras Helados';
$this->params['breadcrumbs'][] = ['label' => 'Compras Helados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compras-helados-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
