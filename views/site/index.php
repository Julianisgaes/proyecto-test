<?php

/** @var yii\web\View $this */

$this->title = 'La heladería';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mb-3">
        <h1 class="display-4">¡Bienvenido!</h1>
        <h2>Creadores</h2>
    </div>

    <div class="row g-5 text-center">
        <div class="col">
            <div class="card">
                <img src="<?= Yii::getAlias('@web') . '/media/julian.jpg' ?>" class="card-img-top px-3 py-3" alt="julián">
                <div class="card-body">
                    <h5 class="card-title">Julián García</h5>
                    <p class="card-text">Agrega algo</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="<?= Yii::getAlias('@web') . '/media/alfredo.jpg' ?>" class="card-img-top px-3 py-3" alt="julián">
                <div class="card-body">
                    <h5 class="card-title">Alfredo López</h5>
                    <p class="card-text">Agrega algo</p>
                </div>
            </div>
        </div>
    </div>

</div>
