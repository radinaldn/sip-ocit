<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KeadaanSiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keadaan-siswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_sekolah')->textInput() ?>

    <?= $form->field($model, 'id_bulan_aktif')->textInput() ?>

    <?= $form->field($model, 'kelas')->textInput() ?>

    <?= $form->field($model, 'jumlah_rombel')->textInput() ?>

    <?= $form->field($model, 'jumlah_siswa')->textInput() ?>

    <?= $form->field($model, 'laki_laki')->textInput() ?>

    <?= $form->field($model, 'perempuan')->textInput() ?>

    <?= $form->field($model, 'jumlah_total')->textInput() ?>

    <?= $form->field($model, 'mutasi_siswa')->textInput() ?>

    <?= $form->field($model, 'masuk')->textInput() ?>

    <?= $form->field($model, 'keluar')->textInput() ?>

    <?= $form->field($model, 'rekapitulasi_absen')->textInput() ?>

    <?= $form->field($model, 'sakit')->textInput() ?>

    <?= $form->field($model, 'alpa')->textInput() ?>

    <?= $form->field($model, 'izin')->textInput() ?>

    <?= $form->field($model, 'jumlah_telegram')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
