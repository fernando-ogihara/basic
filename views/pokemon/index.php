<?php
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Pokédex';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'name',
        'type',
        [
            'header' => 'Actions',
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}', // display the show btn
            'contentOptions' => ['class' => 'action-column'], // add a class to the column
        ]
    ],
]); ?>

<div>
    <?= Html::a('Add New Pokémon',  '/pokemon/create', ['class' => 'btn btn-success mt-2']) ?>
</div>