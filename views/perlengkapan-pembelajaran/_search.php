<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PerlengkapanPembelajaranSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perlengkapan-pembelajaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_perlengkapan_pembelajaran') ?>

    <?= $form->field($model, 'id_sekolah') ?>

    <?= $form->field($model, 'id_bulan_aktif') ?>

    <?= $form->field($model, 'buku_pedoman_guru') ?>

    <?= $form->field($model, 'buku_teks_siswa') ?>

    <?php // echo $form->field($model, 'alat_peraga') ?>

    <?php // echo $form->field($model, 'komputer') ?>

    <?php // echo $form->field($model, 'listrik') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
