<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MobilerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mobiler-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_mobiler') ?>

    <?= $form->field($model, 'id_sekolah') ?>

    <?= $form->field($model, 'id_bulan_aktif') ?>

    <?= $form->field($model, 'lemari_guru') ?>

    <?= $form->field($model, 'meja_guru') ?>

    <?php // echo $form->field($model, 'kursi_guru') ?>

    <?php // echo $form->field($model, 'lemari_siswa') ?>

    <?php // echo $form->field($model, 'meja_siswa') ?>

    <?php // echo $form->field($model, 'kursi_siswa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
