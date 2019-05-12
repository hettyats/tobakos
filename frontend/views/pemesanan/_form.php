<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pemesanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemesanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
        $id = $_GET['id'];
    ?>

    <?= $form->field($model, 'id_rumahindekos')->hiddenInput(['value'=> $id])->label(false);?>
<!-- 
    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'waktu')->textInput() ?> -->

    <?= $form->field($model, 'jumlah_kamar')->textInput(['type' => 'number']) ?>

    <!-- <?= $form->field($model, 'status')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
