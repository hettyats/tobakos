<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Vendor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_VENDOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_AKUN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMA_VENDOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALAMAT_VENDOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMAIL_VENDOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NO_TELEPON__VENDOR')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
