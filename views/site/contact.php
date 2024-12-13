<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\Html;

$this->title = 'Contacto';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

<br/>

    <p>
        <h4> En caso de duda por favor de contactarnos </h4>
        Te contactaremos lo antes posible
        <br/>
        <br/>
        <div class="jumbotron text-center bg-transparent">
        <b><FONT SIZE=7> Nuestras redes  </FONT></b>
        </div>
    </p>
    <br/>
    <br/><img src="" alt="Instagram"><br/>
    <br/><img src="" alt="Facebook"><br/>
    <br/><img src="" alt="Whatsapp"><br/>



    <img src="<?= Yii::getAlias('@web') . '/media/under_construction.gif' ?>" alt="Bajo construcción">
</div>
