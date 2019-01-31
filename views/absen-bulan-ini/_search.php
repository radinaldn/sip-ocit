<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AbsenBulanIniSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="absen-bulan-ini-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_absen') ?>

    <?= $form->field($model, 'id_sekolah') ?>

    <?= $form->field($model, 'id_bulan_aktif') ?>

    <?= $form->field($model, 'sakit') ?>

    <?= $form->field($model, 'izin') ?>

    <?php // echo $form->field($model, 'alpa') ?>

    <?php // echo $form->field($model, 'jumlah') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
