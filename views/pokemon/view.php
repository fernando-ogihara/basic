<?php
/* @var $this yii\web\View */
/* @var $model app\models\Pokemon */

use yii\helpers\Html;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pokédex', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<p><strong>Type:</strong> <?= Html::encode($model->type) ?></p>
<p><strong>Description:</strong> <?= Html::encode($model->description) ?></p>
<p><img src="<?= Html::encode($model->image_url) ?>" alt="<?= Html::encode($model->name) ?>" /></p>
