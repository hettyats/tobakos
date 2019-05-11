<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ulasan */

$this->title = 'Create Ulasan';
$this->params['breadcrumbs'][] = ['label' => 'Ulasans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ulasan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
