<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Ocurrió un error.
    </p>
    <p>
        Contáctenos si cree que es un error del servidor.
    </p>

    <img src="/yii/web/media/under_construction.gif" alt="Bajo construcción">
</div>
