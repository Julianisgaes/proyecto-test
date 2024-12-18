<?php

/** @var yii\web\View $this */

$this->title = 'La heladería';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mb-4">
        <h1 class="display-4">¡Bienvenido a La heladería!</h1>
        <h2 class="mt-3">Creadores:</h2>
    </div>

    <div class="row g-5 text-center">
        <div class="col">
            <div class="card h-100">
                <img src="<?= Yii::getAlias('@web') . '/media/julian.jpg' ?>" class="card-img-top px-3 py-3" alt="julián">
                <div class="card-body mb-3">
                    <h5 class="card-title">Julián García</h5>
                    <p class="card-text">"Me volví un fanático forzado de Yii"</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="<?= Yii::getAlias('@web') . '/media/alfredo.jpg' ?>" class="card-img-top px-3 py-3" alt="julián">
                <div class="card-body mb-3">
                    <h5 class="card-title">Alfredo López</h5>
                    <p class="card-text">"La vida es dura, pero más dura mi verdura"</p>
                </div>
            </div>
        </div>
    </div>

</div>