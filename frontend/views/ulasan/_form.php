<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ulasan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ulasan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_ULASAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_CUSTOMER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_VENDOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_RUMAHINDEKOS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KOMENTAR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RATING')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
