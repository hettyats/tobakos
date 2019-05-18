<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\RumahIndekos;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ulasan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ulasan-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'ID_CUSTOMER')->textInput() ?> -->

    <?=$form->field($model, 'ID_RUMAHINDEKOS')->label('Nama Kost')->dropDownList(
    	ArrayHelper::map(RumahIndekos::find()->all(), 'ID_RUMAHINDEKOS', 'NAMA_RUMAHINDEKOS'),
    	['prompt' => 'Pilih Kost']
		)
	?>

    <?= $form->field($model, 'KOMENTAR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RATING')->radioList(array(1=>'1',2=>'2',3=>'3',4=>'4',5=>'5')); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
