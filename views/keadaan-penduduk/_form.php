<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KeadaanPenduduk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keadaan-penduduk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_sekolah')->textInput() ?>

    <?= $form->field($model, 'id_bulan_aktif')->textInput() ?>

    <?= $form->field($model, 'nama_tenaga_pendidik')->textInput() ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan_mapel_diajar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pendidikan_ijazah_terakhir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_kepegawaian')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
