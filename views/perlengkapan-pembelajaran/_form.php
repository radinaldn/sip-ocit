<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PerlengkapanPembelajaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perlengkapan-pembelajaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_sekolah')->textInput() ?>

    <?= $form->field($model, 'id_bulan_aktif')->textInput() ?>

    <?= $form->field($model, 'buku_pedoman_guru')->textInput() ?>

    <?= $form->field($model, 'buku_teks_siswa')->textInput() ?>

    <?= $form->field($model, 'alat_peraga')->textInput() ?>

    <?= $form->field($model, 'komputer')->textInput() ?>

    <?= $form->field($model, 'listrik')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
