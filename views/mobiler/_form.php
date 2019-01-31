<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mobiler */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mobiler-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_sekolah')->textInput() ?>

    <?= $form->field($model, 'id_bulan_aktif')->textInput() ?>

    <?= $form->field($model, 'lemari_guru')->textInput() ?>

    <?= $form->field($model, 'meja_guru')->textInput() ?>

    <?= $form->field($model, 'kursi_guru')->textInput() ?>

    <?= $form->field($model, 'lemari_siswa')->textInput() ?>

    <?= $form->field($model, 'meja_siswa')->textInput() ?>

    <?= $form->field($model, 'kursi_siswa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
