<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Admin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_ADMIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMA_ADMIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALAMAT_ADMIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMAIL_ADMIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NO_TELEPON_ADMIN')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
