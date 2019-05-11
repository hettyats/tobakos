<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\search\RumahIndekosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rumah-indekos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_RUMAHINDEKOS') ?>

    <?= $form->field($model, 'ID_VENDOR') ?>

    <?= $form->field($model, 'ID_CUSTOMER') ?>

    <?= $form->field($model, 'NAMA_RUMAHINDEKOS') ?>

    <?= $form->field($model, 'BIAYA') ?>

    <?php // echo $form->field($model, 'ALAMAT_RUMAHINDEKOS') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
