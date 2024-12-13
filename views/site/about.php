<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Acerca';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        La heladería es una empresa en la que nos apasiona crear y vender helados. No solo vendemos helados, 
        también creamos momentos en familia y con amigos. Nuestra empresa se ha dedicado a la elaboración de helados 
        artesanales de la más alta calidad.
    </p>
    <p>
        Cada sabor que ofrecemos son de los mejores que una heladería podría ofrecer. 
        Tenemos los sabores clásicos hasta sabores creados por nosotros.
    </p>

    <img src="<?= Yii::getAlias('@web') . '/media/acerca.jpg' ?>" alt="Helados" class="img-fluid img-thumbnail">
</div>