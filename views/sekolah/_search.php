<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SekolahSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sekolah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_sekolah') ?>

    <?= $form->field($model, 'no_statistik') ?>

    <?= $form->field($model, 'no_telp') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'kecamatan') ?>

    <?php // echo $form->field($model, 'kabupaten') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
