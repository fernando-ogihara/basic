<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Yii app examples</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="https://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>DB tests and Pagination</h2>

                <p>DB integrationa and pagination tests</p>

                <div>
                    <?= Html::a('View',  '/country/index', ['class' => 'btn btn-success']) ?>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Pokemon Library</h2>

                <p>Simple app that allow the user create a list of Pokemons, and with CRUD functions.</p>

                <div>
                    <?= Html::a('View',  '/pokemon/index', ['class' => 'btn btn-success']) ?>
                </div>
            </div>
            <div class="col-lg-4">
                <h2>Pokemon API</h2>

                <p>Simple app that allow the user create a list of Pokemons, and with CRUD functions.</p>

                <div>
                    <?= Html::a('View',  '/api/index', ['class' => 'btn btn-success']) ?>
                </div>
            </div>
        </div>

    </div>
</div>
