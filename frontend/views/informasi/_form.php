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

	<?php echo $form->field($model, 'JENIS_FASILITAS[]')->checkboxList(
			['Bed' => 'Bed', 'Lemari' => 'Lemari', 'Kipas Angin' => 'Kipas Angin', 'AC' => 'AC', 'Kamar Mandi Dalam' => 'Kamar Mandi Dalam', 'Sofa' => 'Sofa', 'Dapur' => 'Dapur', 'Meja Belajar' => 'Meja Belajar', 'Dispenser' => 'Dispenser', 'Wi-Fi' => 'Wi-Fi', 'Kompor' => 'Kompor', 'Westafel' => 'Westafel',]
   	);
	?>

    <!-- <?= $form->field($model, 'JENIS_FASILITAS')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'STOK')->textInput() ?>

    <?= $form->field($model, 'KETERANGAN')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
