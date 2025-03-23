<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Pokemon List';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<?php if (is_array($data) && !empty($data)): ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>URL</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $pokemon): ?>
                <tr>
                    <td><?= Html::encode($pokemon['name']) ?></td>
                    <td><?= Html::a(Html::encode($pokemon['url']), $pokemon['url'], ['target' => '_blank']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?= LinkPager::widget(['pagination' => $pagination]) ?>
<?php else: ?>
    <p>No Pokemon found.</p>
<?php endif; ?>