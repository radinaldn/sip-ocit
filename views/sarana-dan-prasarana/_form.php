<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SaranaDanPrasarana */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sarana-dan-prasarana-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_sekolah')->textInput() ?>

    <?= $form->field($model, 'id_bulan_aktif')->textInput() ?>

    <?= $form->field($model, 'tanah_bangunan')->textInput() ?>

    <?= $form->field($model, 'mobiler')->textInput() ?>

    <?= $form->field($model, 'perlengkapan_pembelajaran')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
