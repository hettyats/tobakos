<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ulasan */

$this->title = 'Update Ulasan: ' . $model->ID_ULASAN;
$this->params['breadcrumbs'][] = ['label' => 'Ulasans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_ULASAN, 'url' => ['view', 'id' => $model->ID_ULASAN]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ulasan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
