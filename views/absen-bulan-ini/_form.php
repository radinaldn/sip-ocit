<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AbsenBulanIni */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="absen-bulan-ini-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_sekolah')->textInput() ?>

    <?= $form->field($model, 'id_bulan_aktif')->textInput() ?>

    <?= $form->field($model, 'sakit')->textInput() ?>

    <?= $form->field($model, 'izin')->textInput() ?>

    <?= $form->field($model, 'alpa')->textInput() ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
