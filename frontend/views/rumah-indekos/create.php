<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\RumahIndekos */

$this->title = 'Create Rumah Indekos';
$this->params['breadcrumbs'][] = ['label' => 'Rumah Indekos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rumah-indekos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
