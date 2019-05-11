<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\RumahIndekos */

$this->title = $model->ID_RUMAHINDEKOS;
$this->params['breadcrumbs'][] = ['label' => 'Rumah Indekos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rumah-indekos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_RUMAHINDEKOS], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_RUMAHINDEKOS], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_RUMAHINDEKOS',
            'ID_VENDOR',
            'ID_CUSTOMER',
            'NAMA_RUMAHINDEKOS',
            'BIAYA',
            'ALAMAT_RUMAHINDEKOS',
        ],
    ]) ?>

</div>
