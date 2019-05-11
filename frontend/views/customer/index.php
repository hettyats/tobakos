<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_CUSTOMER',
            'ID_AKUN',
            'NAMA_CUSTOMER',
            'ALAMAT_CUSTOMER',
            'NO_TELEPON_CUSTOMER',
            //'JENIS_KELAMIN',
            //'EMAIL_CUSTOMER:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
