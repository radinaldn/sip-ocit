<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KeadaanPendudukSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keadaan-penduduk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_keadaan_penduduk') ?>

    <?= $form->field($model, 'id_sekolah') ?>

    <?= $form->field($model, 'id_bulan_aktif') ?>

    <?= $form->field($model, 'nama_tenaga_pendidik') ?>

    <?= $form->field($model, 'tempat_lahir') ?>

    <?php // echo $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'no_telp') ?>

    <?php // echo $form->field($model, 'jabatan_mapel_diajar') ?>

    <?php // echo $form->field($model, 'pendidikan_ijazah_terakhir') ?>

    <?php // echo $form->field($model, 'status_kepegawaian') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
