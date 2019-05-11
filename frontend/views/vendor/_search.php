<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\search\VendorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_VENDOR') ?>

    <?= $form->field($model, 'ID_AKUN') ?>

    <?= $form->field($model, 'NAMA_VENDOR') ?>

    <?= $form->field($model, 'ALAMAT_VENDOR') ?>

    <?= $form->field($model, 'EMAIL_VENDOR') ?>

    <?php // echo $form->field($model, 'NO_TELEPON__VENDOR') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
