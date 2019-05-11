<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_CUSTOMER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_AKUN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMA_CUSTOMER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALAMAT_CUSTOMER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NO_TELEPON_CUSTOMER')->textInput() ?>

    <?= $form->field($model, 'JENIS_KELAMIN')->textInput() ?>

    <?= $form->field($model, 'EMAIL_CUSTOMER')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
