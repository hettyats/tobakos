<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

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

            [
                'label' => 'Vendor',
                'attribute' => 'ID_VENDOR',
                'value' => 'vendor.NAMA_VENDOR',
            ],
            'NAMA_RUMAHINDEKOS',
            'BIAYA',
            // [
            //     'format' => 'currency',
            //     'attribute' => 'BIAYA',
            // ],
            'ALAMAT_RUMAHINDEKOS',

            ['class' => 'common\components\ToolsColumn',
            'header' => 'Actions',
            'template' => '{view}{pesan}',
            'buttons' => [
                'del' => function ($url, $model){
                    return "<li>".Html::a('<span class="glyphicon glyphicon-trash"></span> Delete', $url, [
                        'title' => Yii::t('yii', 'Delete'),
                        'data-confirm' => Yii::t('yii', 'Are yo sure to delete this item?'),
                        'data-post' => 'post',
                        'data-pjax' => '0',
                    ])."</li>";
                },
            ],
            'urlCreator' => function ($action, $model, $key, $index){
                if ($action === 'view'){
                    return Url::toRoute(['view', 'id' => $key]);
                }
                if ($action === 'pesan') {
                    $userId = Yii::$app->user->getId();

                    $idUser = (new \yii\db\Query())
                          ->select(['ID_CUSTOMER'])
                          ->from('CUSTOMER')
                          ->where(['ID_AKUN' => $userId])
                            ->all();

                    $id = $idUser;

                    return Url::toRoute(['pemesanan/create', 'id' => $model->ID_RUMAHINDEKOS]);
                }
                // if ($action === 'edit'){
                //     return Url::toRoute(['edit', 'id' => $key]);
                // }
                // if ($action === 'del'){
                //     return Url::toRoute(['del', 'id' => $key]);
                // }
                },
            ],
        ],
    ]); ?>


</div>
