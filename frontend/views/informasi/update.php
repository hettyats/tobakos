<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Informasi */

$this->title = 'Update Informasi: ' . $model->ID_INFORMASI;
$this->params['breadcrumbs'][] = ['label' => 'Informasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_INFORMASI, 'url' => ['view', 'id' => $model->ID_INFORMASI]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="informasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
