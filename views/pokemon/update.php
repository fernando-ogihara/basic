<?php
/* @var $this yii\web\View */
/* @var $model app\models\Pokemon */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Create Pokémon';
$this->params['breadcrumbs'][] = ['label' => 'Pokédex', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->textInput() ?>
<?= $form->field($model, 'type')->textInput() ?>
<?= $form->field($model, 'description')->textarea() ?>
<?= $form->field($model, 'image_url')->textInput() ?>

<div class="form-group">
    <?= Html::submitButton('Update Pokémon', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>
