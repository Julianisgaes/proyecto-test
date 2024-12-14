<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\Html;

$this->title = 'Contacto';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <div class="jumbotron bg-transparent mb-3">
        <h1><?= Html::encode($this->title) ?></h1>
        <h2 class="mt-3">Nuestras redes sociales:</h2>
    </div>

    <a href="https://youtu.be/dQw4w9WgXcQ?feature=shared" target="_blank">
        <div class="card-group text-center">
            <div class="card">
                <img src="<?= Yii::getAlias('@web') . '/media/instagram.jpg' ?>" class="card-img-top px-3 py-3" alt="instagram">
                <div class="card-body mb-2">
                    <h5>Instagram</h5>
                </div>
            </div>
            <div class="card">
                <img src="<?= Yii::getAlias('@web') . '/media/facebook.jpg' ?>" class="card-img-top px-3 py-3" alt="facebook">
                <div class="card-body mb-2">
                    <h5>Facebook</h5>
                </div>
            </div>
            <div class="card">
                <img src="<?= Yii::getAlias('@web') . '/media/whatsapp.jpg' ?>" class="card-img-top px-3 py-3" alt="whatsapp">
                <div class="card-body mb-2">
                    <h5>Whatsapp</h5>
                </div>
            </div>
        </div>
    </a>

</div>