<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TanahBangunanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tanah-bangunan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tanah_bangunan') ?>

    <?= $form->field($model, 'id_sekolah') ?>

    <?= $form->field($model, 'id_bulan_aktif') ?>

    <?= $form->field($model, 'tanah') ?>

    <?= $form->field($model, 'bangunan') ?>

    <?php // echo $form->field($model, 'ruang_belajar') ?>

    <?php // echo $form->field($model, 'ruang_tu') ?>

    <?php // echo $form->field($model, 'ruang_kepala') ?>

    <?php // echo $form->field($model, 'ruang_majelis_guru') ?>

    <?php // echo $form->field($model, 'perpustakaan') ?>

    <?php // echo $form->field($model, 'ruang_komputer') ?>

    <?php // echo $form->field($model, 'tempat_ibadah') ?>

    <?php // echo $form->field($model, 'wc_guru') ?>

    <?php // echo $form->field($model, 'wc_siswa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
