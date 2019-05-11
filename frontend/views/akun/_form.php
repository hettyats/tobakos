<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Akun */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akun-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_AKUN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_CUSTOMER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_ADMIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PERTANYAAN_KEAMANAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMA_AKUN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KATA_SANDI')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
