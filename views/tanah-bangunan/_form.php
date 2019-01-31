<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TanahBangunan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tanah-bangunan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_sekolah')->textInput() ?>

    <?= $form->field($model, 'id_bulan_aktif')->textInput() ?>

    <?= $form->field($model, 'tanah')->textInput() ?>

    <?= $form->field($model, 'bangunan')->textInput() ?>

    <?= $form->field($model, 'ruang_belajar')->textInput() ?>

    <?= $form->field($model, 'ruang_tu')->textInput() ?>

    <?= $form->field($model, 'ruang_kepala')->textInput() ?>

    <?= $form->field($model, 'ruang_majelis_guru')->textInput() ?>

    <?= $form->field($model, 'perpustakaan')->textInput() ?>

    <?= $form->field($model, 'ruang_komputer')->textInput() ?>

    <?= $form->field($model, 'tempat_ibadah')->textInput() ?>

    <?= $form->field($model, 'wc_guru')->textInput() ?>

    <?= $form->field($model, 'wc_siswa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
