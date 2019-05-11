<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\RumahIndekosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rumah Indekos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rumah-indekos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rumah Indekos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_RUMAHINDEKOS',
            'ID_VENDOR',
            'ID_CUSTOMER',
            'NAMA_RUMAHINDEKOS',
            'BIAYA',
            //'ALAMAT_RUMAHINDEKOS',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
