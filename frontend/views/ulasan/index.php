<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\UlasanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ulasans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ulasan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ulasan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_ULASAN',
            'ID_CUSTOMER',
            'ID_VENDOR',
            'ID_RUMAHINDEKOS',
            'KOMENTAR',
            //'RATING',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
