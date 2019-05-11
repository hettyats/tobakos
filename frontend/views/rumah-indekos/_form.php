<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RumahIndekos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rumah-indekos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_RUMAHINDEKOS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_VENDOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_CUSTOMER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMA_RUMAHINDEKOS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BIAYA')->textInput() ?>

    <?= $form->field($model, 'ALAMAT_RUMAHINDEKOS')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
