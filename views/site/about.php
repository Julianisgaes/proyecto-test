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
<br/>
<div class="container">
    <div class="row">
    <div class="col-6">
        <FONT SIZE=6><p align="lefth">Julian Israel</p></FONT>
        <img
        src="https://i.pinimg.com/736x/db/56/31/db56314c67691d80c63e6ecfe4ad2b39.jpg"
        width="350px"
        height="350px"
        border="10px"
        align="left"
        >
        <p align="center">
        </p>
    </div>
    <div class="col-6">
        <FONT SIZE=6><p align="Right">Alfredo Lopez</p></FONT>
        <img
        src="https://i.pinimg.com/736x/e2/1a/13/e21a1323d9b4d0e5d4f0e277b1a051ae.jpg"
        width="350px"
        height="350px"
        border="10px"
        align="right"
        >
    </div>
    </div>
<br/>