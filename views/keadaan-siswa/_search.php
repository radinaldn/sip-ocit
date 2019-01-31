<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KeadaanSiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keadaan-siswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_keadaan_siswa') ?>

    <?= $form->field($model, 'id_sekolah') ?>

    <?= $form->field($model, 'id_bulan_aktif') ?>

    <?= $form->field($model, 'kelas') ?>

    <?= $form->field($model, 'jumlah_rombel') ?>

    <?php // echo $form->field($model, 'jumlah_siswa') ?>

    <?php // echo $form->field($model, 'laki_laki') ?>

    <?php // echo $form->field($model, 'perempuan') ?>

    <?php // echo $form->field($model, 'jumlah_total') ?>

    <?php // echo $form->field($model, 'mutasi_siswa') ?>

    <?php // echo $form->field($model, 'masuk') ?>

    <?php // echo $form->field($model, 'keluar') ?>

    <?php // echo $form->field($model, 'rekapitulasi_absen') ?>

    <?php // echo $form->field($model, 'sakit') ?>

    <?php // echo $form->field($model, 'alpa') ?>

    <?php // echo $form->field($model, 'izin') ?>

    <?php // echo $form->field($model, 'jumlah_telegram') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
