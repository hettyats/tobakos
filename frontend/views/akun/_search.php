<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\search\AkunSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akun-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_AKUN') ?>

    <?= $form->field($model, 'ID_CUSTOMER') ?>

    <?= $form->field($model, 'ID_ADMIN') ?>

    <?= $form->field($model, 'PERTANYAAN_KEAMANAN') ?>

    <?= $form->field($model, 'NAMA_AKUN') ?>

    <?php // echo $form->field($model, 'KATA_SANDI') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
