<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Helados $model */

$this->title = 'Crear registro de Helados';
$this->params['breadcrumbs'][] = ['label' => 'Helados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="helados-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
