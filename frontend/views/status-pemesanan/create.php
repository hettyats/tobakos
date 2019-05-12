<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\StatusPemesanan */

$this->title = 'Create Status Pemesanan';
$this->params['breadcrumbs'][] = ['label' => 'Status Pemesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-pemesanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
