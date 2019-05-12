<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\RumahIndekos;

/* @var $this yii\web\View */
/* @var $model frontend\models\Informasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="informasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=$form->field($model, 'ID_RUMAHINDEKOS')->label('Nama Kost')->dropDownList(
    	ArrayHelper::map(RumahIndekos::find()->all(), 'ID_RUMAHINDEKOS', 'NAMA_RUMAHINDEKOS'),
    	['prompt' => 'Pilih Kost']
		)
	?>

    <?= $form->field($model, 'JENIS_FASILITAS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STOK')->textInput() ?>

    <?= $form->field($model, 'KETERANGAN')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
