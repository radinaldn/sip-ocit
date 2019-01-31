<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SaranaDanPrasaranaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sarana-dan-prasarana-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_sarana_dan_prasarana') ?>

    <?= $form->field($model, 'id_sekolah') ?>

    <?= $form->field($model, 'id_bulan_aktif') ?>

    <?= $form->field($model, 'tanah_bangunan') ?>

    <?= $form->field($model, 'mobiler') ?>

    <?php // echo $form->field($model, 'perlengkapan_pembelajaran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
