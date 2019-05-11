<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Informasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="informasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_INFORMASI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_RUMAHINDEKOS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_VENDOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JENIS_FASILITAS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STOK')->textInput() ?>

    <?= $form->field($model, 'KETERANGAN')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
