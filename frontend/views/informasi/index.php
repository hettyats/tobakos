<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\InformasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Informasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Informasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_INFORMASI',
            'ID_RUMAHINDEKOS',
            'ID_VENDOR',
            'JENIS_FASILITAS',
            'STOK',
            //'KETERANGAN',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
