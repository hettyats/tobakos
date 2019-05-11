<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Akun */

$this->title = 'Update Akun: ' . $model->ID_AKUN;
$this->params['breadcrumbs'][] = ['label' => 'Akuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_AKUN, 'url' => ['view', 'id' => $model->ID_AKUN]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="akun-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
