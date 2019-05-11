<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\search\CustomerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_CUSTOMER') ?>

    <?= $form->field($model, 'ID_AKUN') ?>

    <?= $form->field($model, 'NAMA_CUSTOMER') ?>

    <?= $form->field($model, 'ALAMAT_CUSTOMER') ?>

    <?= $form->field($model, 'NO_TELEPON_CUSTOMER') ?>

    <?php // echo $form->field($model, 'JENIS_KELAMIN') ?>

    <?php // echo $form->field($model, 'EMAIL_CUSTOMER') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
