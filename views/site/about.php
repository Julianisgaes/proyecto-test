<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Acerca';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        La heladeria es una empresa que nos apasiona crear y vender helados, no solo vendemos helados tambien creamos
        momentos en familia, amigos. Nuestra empresa se ha dedicado a la elaboracion de helados artesanales de la mas
        alta calidad.
    </p><br/>
    <p>
        Cada sabor que ofrecemos se los mejores sabores que una heladeria podrai ofrecer. Tenemos los sabores calsicos
        asta sabores creados por nosotros
    </p>

    <img src="<?= Yii::getAlias('@web') . '/media/under_construction.gif' ?>" alt="Bajo construcción">
</div>
