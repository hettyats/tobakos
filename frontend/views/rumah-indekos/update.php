<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RumahIndekos */

$this->title = 'Update Rumah Indekos: ' . $model->ID_RUMAHINDEKOS;
$this->params['breadcrumbs'][] = ['label' => 'Rumah Indekos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_RUMAHINDEKOS, 'url' => ['view', 'id' => $model->ID_RUMAHINDEKOS]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rumah-indekos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
